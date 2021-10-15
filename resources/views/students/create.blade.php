@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('students.index') }}" class="btn btn-primary">Kembali</a>
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <ul class="list-group">
                    Nama <input type="text" name="name" id="name" required>
                    NIS <input type="text" name="nis" id="nis" required>
                    Tanggal Lahir <input type="date" name="birth_date" id="birth_date" required>
                </ul>
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
