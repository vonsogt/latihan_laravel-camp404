@extends('layouts.app')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3 text-center">
        <div class="container-fluid py-5">
            <h3 class="display-5 fw-bold">Data Siswa</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Tanggal Lahir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Andi Saputra</td>
                        <td>101</td>
                        <td>2003-12-22</td>
                    </tr>
                    <tr>
                        <td>Budi Cahya</td>
                        <td>102</td>
                        <td>2004-01-30</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
