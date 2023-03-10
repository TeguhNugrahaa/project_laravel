<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //schema pembuatan database
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->char('nim', 20)->unique();
            $table->string('email')->unique();
            $table->string('jurusan');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
