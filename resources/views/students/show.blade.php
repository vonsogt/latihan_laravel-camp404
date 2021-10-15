@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card w-50">
            <h3 class="card-header">
                Profil Siswa
            </h3>
            <div class="card-body">
                @can('isAdmin')
                    <a href="{{ route('students.index') }}">Kembali</a>
                @endcan
                <div class="row ml-2">
                    <h4 class="col-4">Nama</h4>
                    <h4>: {{ $student->name }}</h4>
                </div>
                <div class="row ml-2">
                    <h4 class="col-4">NIS</h4>
                    <h4>: {{ $student->nis }}</h4>
                </div>
                <div class="row ml-2">
                    <h4 class="col-4">Tanggal Lahir</h4>
                    <h4>: {{ $student->birth_date }}</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
