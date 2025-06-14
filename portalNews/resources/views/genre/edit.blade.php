@extends('layouts.master')

@section('title')
    Halaman Edit Genre
@endsection

@section('content')

<form action="/genre/{{$genre->id }}" method="POST">
    <!-- /resources/views/post/create.blade.php -->

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @method('PUT')

<!-- Create Post Form -->
    @csrf
  <div class="mb-3">
    <label class="form-label">Genre Name</label>
    <input type="text" class="form-control" value="{{$genre->name}}" name="name">
  </div>
  <div class="mb-3">
    <label class="form-label">Genre Description</label>
    <textarea name="description" class="form-control" cols="30" rows="10">{{$genre->description}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection