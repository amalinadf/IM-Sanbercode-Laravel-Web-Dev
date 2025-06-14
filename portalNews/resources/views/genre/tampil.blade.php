@extends('layouts.master')

@section('title')
    Halaman Tambah Genre
@endsection

@section('content')

<a href="/genre/create" class="btn btn-primary btn-sm my-3">Tambah</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($genres as $item)
     <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$item->name}}</td>
      <td>
        <form action="/genre/{{$item->id}}" method="POST">
          @method("DELETE")
          @csrf
        <a href="/genre/{{$item->id}}" class="btn btn-sm btn-info">Detail</a>
        <a href="/genre/{{$item->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
        <input type="submit" class="btn btn-sm btn-danger" value="Delete">
        </form>
      </td>
    </tr>  
    @empty
        <tr>
          <td colspan="3">Tidak ada genre</td>
        </tr>
    @endforelse
   
  </tbody>
</table>

@endsection