<!-- buat base templatenya -->
<!-- ngambilnya dari folder views/layout/main -->
@extends('layout.main')

@section('title', 'Daftar Mahasiswa')




<!-- starter template boostrap -->

@section('container')
<div class="container">
    <div class="row">

        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <!-- membuat tabel boostrap -->

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach( $mahasiswa as $mhs )

                    <tr>
                        <!-- menampilkan data mahasiswa di mysql -->
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->email }}</td>
                        <td>{{ $mhs->jurusan }}</td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>





        </div>
    </div>
</div>
@endsection