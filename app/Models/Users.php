<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
  use HasFactory;
  protected $appends = [
  'reName'
];
  public function contact(){
    return $this->hasOne(Contacts::class);
   }
   public function posts(){
    return $this->hasMany(Posts::class);
   }

   public function teacher(){
    return $this->belongsTo(Teacher::class);
}


public function getreNameAttribute()
{
    return $this->name . 'sali';
}
    
}
