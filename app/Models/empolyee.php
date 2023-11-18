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
}
