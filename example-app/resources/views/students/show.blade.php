<!-- buat base templatenya -->
<!-- ngambilnya dari folder views/layout/main -->
@extends('layout.main')

@section('title', 'Detail Mahasiswa')




<!-- starter template boostrap -->

@section('container')
<div class="container">
    <div class="row">

        <div class="col-6">
            <h1 class="mt-3">Detail Mahasiswa</h1>


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $students->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $students->nim }}</h6>
                    <p class="card-text">{{ $students->email }}</p>
                    <p class="card-text">{{ $students->jurusan }}</p>


                    <a href="{{ $students->id }}/edit" class="btn btn-primary">Edit</a>

                    <form action="/students/{{ $students->id }}" method="post" class="d-inline">
                        @method('delete')
                        <!-- menangani crosc side resource forsein bahaya terjadinya pengambilan data -->

                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/students" class="card-link">Kembali</a>

                </div>
            </div>



        </div>
    </div>
</div>
@endsection