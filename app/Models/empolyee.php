<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empolyee extends Model
{
    use HasFactory;
    public $table = 'empolyee';
    public $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'address'
    ];

    protected  $appends = ['rename'];

    public function  getRenameAttribute($text)
    {
        print_r($text);die;
        return $this->name.' akashsali';
    }
}
