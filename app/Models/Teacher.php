<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table ="teacher";
    use HasFactory;

    // public function subject(){
    //     return $this->hasMany(Subject::class,'teachers_id');
    // }

    public function subject(){
        return $this->hasMany(Subject::class,'teachers_id');
    }

    public function student(){
        return $this->hasMany(Users::class);
       }

    function getData(){
        return "welcome to models";
    }
}
