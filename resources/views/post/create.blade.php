@extends('layout')
@section('content')
<h1>create post: </h1>
<form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data" style="margin: 33px">
    @csrf
    <div class="form-group">
      <label for="p_t" class="form-label">post title:</label>
      <input type="text" class="form-control" id="p_t" name="title">
      @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="p_d" class="form-label">post description:</label>
      <textarea name="description" id="p_d" class="form-control" > </textarea>
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
    <label for="p_image" class="form-label">post image:</label><br>
    <input type="file" class="form-control-file" id="p-image" name="image">
    @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
@endsection
