<!-- buat base templatenya -->
<!-- ngambilnya dari folder views/layout/main -->
@extends('layout.main')

@section('title', 'Daftar Mahasiswa')




<!-- starter template boostrap -->

@section('container')
<div class="container">
    <div class="row">

        <div class="col-6">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <!-- create studentsnya dan tambahkan margin kiri kanan atas -->

            <a href="/students/create" class="btn btn-primary my-3">Tambah data Mahasiswa</a>


            <!-- Redirecting with flashed session data -->
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif



            <ul class="list-group">

                @foreach( $students as $students )
                <li class="list-group-item d-flex justify-content-between align-items-center">


                    <!-- panggilan untuk tabel students -->

                    {{ $students->nama }}

                    <a href="/students/{{ $students-> id }}" class="badge badge-info">detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection