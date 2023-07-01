<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Posts;
use App\Models\Teacher;
use App\Models\Subject;
use DB;
class TestController extends Controller
{
    public function index(){
        // \DB::enableQueryLog();
        // $user = Teacher::all();
        // dd($user->toArray());
        // dd(DB::getQueryLog());

        // $user = Users::with(['contact','posts'])->first();
        // dd($user->toArray());

        $data = Teacher::all();

        return view('test.index',compact('data'));
        
    }
   public function insertForm(){
    return view('test.insertForm');

    }
    public function insertData(Request $req){
        $datas =  new Teacher;
        $datas->name=$req->name;
        if($datas->save()){
            $sub = $req->sname;
            $count = count($sub);
            
            for ($i=0; $i<$count; $i++) { 
                $data = new Subject;
                $data->sname=$sub[$i];
                $data->teachers_id=$datas->id;
                $data->save();
            }
        }
    }
public function clsssForm($id){
    // return $id;
    return view('test.classForm',compact('id'));
}

public function clsssData(Request $req){
   
    $sub = $req->sname;
    $count = count($sub);
    
    for ($i=0; $i<$count; $i++) { 
        $data = new Subject;
        $data->sname=$sub[$i];
        $data->teachers_id=$req->teachers_id;
        $data->save();
    }
//    return count($sub);
    // return view('test.classForm',compact('id'));
}
    
}