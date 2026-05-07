@extends('main')



@section('content')
    @section('title')
    <h1>Fakultas</h1>
@endsection
    @foreach ($result as $item)
        {{ $item->nama_fakultas }} - {{ $item->singkatan }} <br>
    
    @endforeach
@endsection