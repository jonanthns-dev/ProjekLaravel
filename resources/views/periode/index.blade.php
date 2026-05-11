
@extends('main')

 @section('title', 'Periode')

@section('content')
        

    <a href="{{ route('periode.create') }}" class="btn btn-xs btn-primary">Tambah</a>
    <a href="{{ route('periode.create') }}" class="btn btn-xs btn-danger">Hapus</a>
    <a href="{{ route('periode.create') }}" class="btn btn-xs btn-warning">Edit</a>
    <h1>Periode</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                   Tahun Akademik
                </th>
                 <th>
                    Semester
                </th>
            </tr>
        </thead>
   

    <tbody>
         @foreach ($result as $item)
       <tr>
        <td> {{ $item->tahun_akademik }}  </td>
        <td> {{ $item->semester }}    </td>
        </tr>
          
      @endforeach
    </tbody>
    </table>
@endsection