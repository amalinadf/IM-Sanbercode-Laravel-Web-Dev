@extends('layouts.master')

@section('title')
    Halaman Tambah Genre
@endsection

@section('content')

<form action="/genre" method="POST">
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

<!-- Create Post Form -->
    @csrf
  <div class="mb-3">
    <label class="form-label">Genre Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label class="form-label">Genre Description</label>
    <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection