<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Teacher;
class relationshipController extends Controller
{
    public function relationTest(){
        // $data = array();
        $data = Users::first();
        // $data = Teacher::with('student')->get();
        // $data = Users::with('teacher.subject')->get();
        // dd($data->toArray());
    //    return view('relation',["data"=>$data]);
    }
}
