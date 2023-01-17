<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<<< HEAD:example-app/app/Models/Mahasiswa.php
class Mahasiswa extends Model
{
    // kalau nama tabelnya tidak default kalau tidak punya tabel student pake protected tabel

    //dan untuk protected table untuk mahasiswa

    protected $table = 'mahasiswa';
========
class Students extends Model
{
    //mess assignment dengan protected dengan nama, nim, email,jurusan
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
>>>>>>>> 26f2be433c08e1b76d6aebbcf3cdf98ee5c3a58e:example-app/app/Models/Student.php
}

