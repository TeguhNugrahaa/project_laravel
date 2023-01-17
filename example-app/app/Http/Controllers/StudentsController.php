<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
// untuk buat pengguna databasenya
use Illuminate\Support\Facades\DB;
// untuk memanggil model studentnya
use App\Models\Students;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // buat variabel studentsnya di controllernya
        $students = Students::all();
        // ini untuk return view file students (index.blade.php)
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Versi 1
        //membuat databasenya
        //$students = new Students;
        //$students->nama = $request->nama;
        //$students->nim = $request->nim;
        //$students->email = $request->email;
        //$students->jurusan = $request->jurusan;
        //menyimpan databasenya
        //$students->save();

        //Versi 2
        //Students::create([
        //'nama' => $request->nama,
        //'nim' => $request->nim,
        //'email' => $request->email,
        //'jurusan' => $request->jurusan
        //]);





        //request validasinya
        $request->validate([

            'nama' => 'required',
            'nim' => 'required|size:10',
            'email' => 'required',
            'jurusan' => 'required'

        ]);

        //Versi 3
        Students::create($request->all());
        //mengembalikan ke link studentsnya direct flash data
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(

            // ini untuk menangkap studentsnya
            'students' => Students::find($id)
        );

        // ini untuk menamngkap data models studentsnya
        return view('students.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Students;
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $students)
    {
        return view('students.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([

            'nama' => 'required',
            'nim' => 'required|size:10',
            'email' => 'required',
            'jurusan' => 'required'

        ]);

        //buat update studentsnya namun harus diperbaiki

        $students = Students::where('id', $id)->first();
        $students->update([

            'nama' => 'request',
            'nim' => 'request',
            'email' => 'request',
            'jurusan' => 'request'

        ]);

        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //$Students::destroy($id->id);
        $students = Students::findOrFail($id);
        $students->destroy();
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Dihapus!');
    }
}
