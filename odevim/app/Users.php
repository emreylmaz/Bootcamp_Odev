<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable=[
      'name','username','email','password','position'//doldurulabilir alanlar
    ];
}
