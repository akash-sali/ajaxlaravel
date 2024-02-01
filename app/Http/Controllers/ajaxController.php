<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class ajaxController extends Controller
{
    public function insertform(Request $request){
        return view("ajaxcurd.insertform");
    }

    public function insertdata(Request $request){

         $data = new student();
         $data->name=$request->input('name');
         
         $data->address=$request->input('address');
         
         $data->email=$request->input('email');
         
         $data->password=$request->input('password');
         $data->contact=$request->input('contact');
        
        
        if($request->hasFile('images'))
        {

         $file = $request->file("images");
         
         $extension = $file->getClientOriginalExtension();
         
          $filename = time().".".$extension;
          
         $file->move("upload/",$filename);
        
         $data->images = $filename;
         
        } 
        $data->save();
         return response()->json(["massage"=>"insert success"]);

    }
  public function ajaxtable(){
    return view("ajaxcurd.index");
  }
    public function ajaxindex(Request $request){
         $student= student::find(1)->faculty;
        echo "<pre>"; print_r($student);
     
       // return view('ajaxcurd.index',['students'=>$student]) ;
        return response()->json([
            'students'=>$student,
        ]);
    }

    public function listingdata(){
        $data = student::all();
        $html = "";
        foreach ($data as $key => $value) {
            $html .= '
                <tr>
                    <td>'.$value->id.'</td>
                    <td>'.$value->name.'</td>
                    <td>'.$value->address.'</td>                 
                    <td>'.$value->email.'</td>
                    <td>'.$value->contact.'</td>
                    <td>'.$value->images.'</td>
                    <td?></td>
                </tr>
            ';
        }
        return $html;
    }

    function update(Request $request){
        print_r($request->all());die;
    }
    
}

