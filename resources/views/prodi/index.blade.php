@extends('main')

@section('content' )

    
    @section('title')
    <h1>Data Prodi</h1>
    @endsection

<table border="1" cellpadding="10" class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Prodi</th>
        <th>Singkatan</th>
        <th>Kaprodi</th>
        <th>Fakultas</th>
        <th>Singkatan Fakultas</th>
    </tr>

    @foreach($prodis as $key => $prodi)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $prodi->nama_prodi }}</td>
        <td>{{ $prodi->singkatan }}</td>
        <td>{{ $prodi->kaprodi }}</td>
        <td>{{ $prodi->fakultas->nama_fakultas  }}</td>
        <td>{{ $prodi->fakultas->singkatan  }}</td>
        {{-- <td>{{ $prodi->  }}</td> --}}
    </tr>
    @endforeach

</table>
@endsection

