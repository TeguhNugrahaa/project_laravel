<!-- buat base templatenya -->
<!-- ngambilnya dari folder views/layout/main -->
@extends('layout.main')

@section('title', 'About')




<!-- starter template boostrap -->

@section('container')
<div class="container">
    <div class="row">

        <div class="col-10">
            <!--h1 class="mt-3">Hello, <?php echo $nama; ?>!</h1>-->
            <h1 class="mt-3">Hello, {{$nama}}!</h1>

        </div>
    </div>
</div>
@endsection