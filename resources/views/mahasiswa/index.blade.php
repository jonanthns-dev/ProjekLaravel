
@extends('main')

 @section('title', 'Mahasiswa')

@section('content')
        

    <a href="{{ route('mahasiswa.create') }}" class="btn btn-xs btn-primary">Tambah</a>

    <h1>Data Mahasiswa</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                 <th>NPM</th>
                <th>Nama</th>
                 <th>Prodi</th>
                 <th>Foto</th>
                 <th>aksi</th>
            </tr>
        </thead>
   

    <tbody>
        @foreach($mahasiswa as $key => $mhs)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $mhs->npm}}</td>
        <td>{{ $mhs->mama}}</td>
        <td>{{ $mhs->prodi->nama_prodi ?? '-' }}</td>
        <td>@if ($mhs->foto)
                <img src="{{ asset('storage/fotos/' . $mhs->foto) }}" alt="Foto" width="100">
                @else <p>Foto tidak tersedia</p>
        @endif
    </td>
        <td class="d-flex ">
            <form method="POST" action="{{ route('fakultas.destroy', $mhs->id) }}">
    @csrf
    <input name="_method" type="hidden" value="DELETE">
    <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm me-2"
    data-toggle="tooltip" title='Delete'
    data-nama='{{ $mhs->npm }}'>Hapus</button>
    </form>

    
            <form method="POST" action="{{ route('fakultas.edit', $mhs->id) }}">
    @csrf
    <button type="submit" class="btn btn-xs btn-warning btn-rounded">Edit</button>
    </form>
    </td>

    </tr>
    @endforeach
    </tbody>
    </table>
@endsection