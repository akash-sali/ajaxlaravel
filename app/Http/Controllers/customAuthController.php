<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class customAuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function registration(){
        return view('auth.registration');
    }
    public function registerUser(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        
        $data = new User;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = Hash::make($req->password);
        $res = $data->save();
        if($res){
            return back()->with('success','you have registered successfully');
        }else{
            return back()->with('fail','something rong');
        }
    }

    public function loginUser(Request $reqs){
        $reqs->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
         $user = User::where('email','=',$reqs->email)->first();
        if($user){
            if(Hash::check($reqs->password,$user->password))
            {
                 $reqs->session()->put('loginId',$user->id);
                 return redirect('dashbord');
            }else
            {
                return back()->with('fail',"password not matches");
            }
        }else{
            return back()->with('fail',"email is not registration");
        }
    }
    public function dashbord(){
       
        $data = array();
        if(Session::has('loginId'))
        {
            $data = User::where('id','=',Session::get('loginId'))->first();
        }
        
        return view('auth.dashbord',compact('data'));
    }
    public function logout(){
        if(Session::has('loginId'))
        {       
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
