@extends('main')

 @section('title', 'Fakultas')

@section('content')
        

    <a href="{{ route('fakultas.create') }}" class="btn btn-xs btn-primary">Tambah</a>
    <a href="{{ route('fakultas.create') }}" class="btn btn-xs btn-danger">Hapus</a>
    <a href="{{ route('fakultas.create') }}" class="btn btn-xs btn-warning">Edit</a>
    <h1>Fakultas</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                    Nama
                </th>
                 <th>
                    Singkatan
                </th>
            </tr>
        </thead>
   

    <tbody>
         @foreach ($result as $item)
       <tr>
        <td>{{ $item->nama_fakultas }} </td>
        <td> {{ $item->singkatan }}     </td>
        </tr>
          
      @endforeach
    </tbody>
    </table>
@endsection
   
