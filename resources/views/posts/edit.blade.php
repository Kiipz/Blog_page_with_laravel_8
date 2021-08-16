@extends('layouts.app')

@section('content')
<h1 class="line"><span>Edit blog</span></h1>
<form method="POST" action="{{ asset('/posts') }}/{{ $post->id }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ $post->title }}">
        </div>
         <div class="form-group">
            <label for="content">Content</label>
            <textarea class="ckeditor form-control" rows="10" name="body" id="body" placeholder="Enter body content">{{ $post->body }}</textarea>
        </div>
        <div class="form-group">
            <label for="img">Cover Image</label>
            <input type="file" name="cover_image" class="form-control">
        </div>
        <button style="border-radius: 0" type="submit" class="btn btn-primary mt-2">Update</button>
    </div>
  </form>
@endsection
