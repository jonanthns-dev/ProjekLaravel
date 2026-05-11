
@extends('main')

 @section('title', 'Prodi')

@section('content')
        

    <a href="{{ route('prodi.create') }}" class="btn btn-xs btn-primary">Tambah</a>
    <a href="{{ route('prodi.create') }}" class="btn btn-xs btn-danger">Hapus</a>
    <a href="{{ route('prodi.create') }}" class="btn btn-xs btn-warning">Edit</a>
    <h1>Data Prodi</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                 <th>No</th>
                <th>Nama</th>
                 <th>Singkatan</th>
                 <th>Kaprodi</th>
                <th>Fakultas</th>
                <th>Singkatan Fakultas</th>
            </tr>
        </thead>
   

    <tbody>
        @foreach($prodis as $key => $prodi)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $prodi->nama_prodi }}</td>
        <td>{{ $prodi->singkatan }}</td>
        <td>{{ $prodi->kaprodi }}</td>
        <td>{{ $prodi->fakultas->nama_fakultas  }}</td>
        <td>{{ $prodi->fakultas->singkatan  }}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
@endsection