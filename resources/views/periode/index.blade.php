
@extends('main')

 @section('title', 'Periode')

@section('content')
        

    <a href="{{ route('periode.create') }}" class="btn btn-xs btn-primary">Tambah</a>

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
                <th>
                    Aksi
                </th>
            </tr>
        </thead>
   

    <tbody>
         @foreach ($result as $item)
       <tr>
        <td> {{ $item->tahun_akademik }}  </td>
        <td> {{ $item->semester }}    </td>
        <td><form method="POST" action="{{ route('periode.destroy', $item->id) }}">
@csrf
<input name="_method" type="hidden" value="DELETE">
<button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
    data-toggle="tooltip" title='Delete'
    data-nama='{{ $item->tahun_akademik}}'>Hapus</button>
</form>
    <a href="{{ route('fakultas.store') }}" class="btn btn-xs btn-warning btn-primary">Edit</a>
</td>
        </tr>
          
      @endforeach
    </tbody>
    </table>
@endsection