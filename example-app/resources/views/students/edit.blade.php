<!-- buat base templatenya -->
<!-- ngambilnya dari folder views/layout/main -->
@extends('layout.main')

@section('title', 'Form Ubah Data Mahasiswa')




<!-- starter template boostrap -->

@section('container')
<div class="container">
    <div class="row">

        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>

            <!-- form method post dengan aksi melemparkan link studentsnya dan perlu token untuk masuk database (csrf) -->
            <form method="post" action="{{ url('/students/update/'.$students->id) }}">
                {{-- tidak perlu menggunakan directive method karena telah dihandle oleh csrf_field --}}
                {{@csrf_field()}}

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <!-- menampilkan tanda eror -->
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $students->nama }}">
                    <!-- menampilkan pesan eror -->
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <!-- menampilkan tanda eror -->
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan nim" name="nim" value="{{ $students->nim }}">
                    <!-- menampilkan pesan eror -->
                    @error('nim')
                    <div class="invalid-feedback">{{ $message }}</div>@enderror

                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <!-- menampilkan tanda eror -->
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{ $students->email }}">
                    <!-- menampilkan pesan eror -->
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <!-- menampilkan tanda eror -->
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ $students->jurusan }}">
                    <!-- menampilkan pesan eror -->
                    @error('jurusan')
                    <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data!</button>





            </form>



        </div>
    </div>
</div>
@endsection
