<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use validator;
class StudentajaxController extends Controller
{
    public function index(){
        $data = student::find(1)->faculty;
        // echo print_r($data);
    }
    
    public function listing(Request $request)
    {
        $stu_data = sudenData::all();
        return response()->json([
            'student'=>$stu_data,
        ]);

    }
    public function store(Request $request){
        $student = new sudenData;
        
        $student->name=$request->input('name');
        $student->course=$request->input('course');
        $student->section=$request->input('section');
        $student->email=$request->input('email');
        $student->save();
        return response()->json([
                    'status'=>200,
                    'message'=>'Student Added Successfully',
                ]); 
                
    }
    
    public function edit($id)
    {    
        
        $student = sudenData::find($id);
        return response()->json([
            'status'=>"data fatch succussfully",
            'error'=>200 
        ]);
    }
}
