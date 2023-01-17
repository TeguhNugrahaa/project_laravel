<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // kalau nama tabelnya tidak default kalau tidak punya tabel student pake protected tabel

    //dan untuk protected table untuk mahasiswa

    protected $table = 'mahasiswa';
}
