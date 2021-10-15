@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <h3 class="card-header">
                Data Siswa
            </h3>
            <div class="card-body">
                <a href="{{ route('students.create') }}">Tambah Data Siswa</a>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->nis }}</td>
                                <td>{{ $student->birth_date }}</td>
                                <td>
                                    <ul class="nav">
                                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-success mr-2">Lihat</a>
                                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary mr-2">Ubah</a>
                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </ul>
                                </td>
                            </tr>
                        @empty
                            <p class="text-center">Belum ada data siswa.</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
