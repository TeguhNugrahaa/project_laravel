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
    public function create(Students $students)
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
        // Versi 1
        //$students = new Students;
        //$students->nama = $request->nama;
        //$students->nim = $request->nim;
        //$students->email = $request->email;
        //$students->jurusan = $request->jurusan;


        // Versi 2
        //$students->save();

        //Students::create([

        //'nama' => $request->nama,
        //'nim' => $request->nim,
        //'email' => $request->email,
        //'jurusan' => $request->jurusan


        //])

        // Versi 3


        $request->validate([

            'nama' => 'required',
            'nim' => 'required|size:10',
            'email' => 'required',
            'jurusan' => 'required'

        ]);

        Students::create($request->all());
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Ditambahkan');
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
    public function edit($id)
    {
        $students = Students::find($id); //menemukan id students
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

        $students = Students::where('id', $id)->first(); // get id, jika di temukan maka proses update akan berjalan
        $students->update([

            'nama' => $request->nama, //mengambil data isian form
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);

        // lakukan statement atau pengecekan
        if ($students) {

            return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Diubah');
        } else {

            return redirect('/students')->with('status', 'Opps terjadi kesalahan, silahkan diulangi');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Students::findOrFail($id);
        $students->destroy($id);
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Dihapus');
    }
}
