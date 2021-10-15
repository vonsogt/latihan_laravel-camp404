@extends('layouts.app')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3 text-center">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Portal Informasi Siswa</h1>
            <p class="fs-4">Selamat datang di Portal Informasi Siswa SMA 404!</p>
            <a class="btn btn-dark btn-lg" type="button">Info Kegiatan</a>
            <a class="btn btn-primary btn-lg" type="button">Data Siswa</a>
        </div>
    </div>

    <!-- Dropped the jumbotron component as it can be replicated with utilities.-->
    {{-- <div class="jumbotron text-center">
        <h1>Portal Informasi Siswa</h1>
        <p>Selamat datang di Portal Informasi Siswa SMA 404!</p>
        <a href="#" class="btn btn-dark">Info Kegiatan</a>
        <a href="#" class="btn btn-primary">Data Siswa</a>
    </div> --}}
@endsection
