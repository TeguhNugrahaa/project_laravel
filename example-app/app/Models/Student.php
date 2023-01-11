<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // kalau nama tabelnya tidak default kalau tidak punya tabel student

    protected $table = 'mahasiswa';
}
