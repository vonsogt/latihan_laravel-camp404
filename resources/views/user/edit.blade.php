@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Ubah Data User</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('user.index') }}" class="btn btn-primary">Kembali</a>
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama <input type="text" name="name" id="name" value="{{ $user->name }}" required>
                    Role
                    <select name="role" id="role">
                        <option value="admin" @if ($user->role == 'admin') selected @endif>Admin</option>
                        <option value="siswa" @if ($user->role == 'siswa') selected @endif>Siswa</option>
                    </select>
                    Email <input type="email" name="email" id="email" value="{{ $user->email }}" required>
                </ul>
                <input type="submit" value="Ubah Data" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
