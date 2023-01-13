<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    //mess assignment dengan protected dengan nama, nim, email,jurusan
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
}

