@extends('layouts.master')

@section('title')
    Halaman Tambah Genre
@endsection

@section('content')

<h1 class="text-primary">{{$genre->name}}</h1>
<p>{{$genre->description}}</p>

@endsection