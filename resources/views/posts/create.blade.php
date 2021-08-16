@extends('layouts.app')

@section('content')
<h1 class="line"><span>Create a new blog</span></h1>
<form method="POST" action="{{ asset('/posts') }}" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ old('title')}}">
        </div>
         <div class="form-group">
            <label for="content">Content</label>
            <textarea class="ckeditor orm-control" rows="10" name="body" id="body" placeholder="Enter body content">{{ old('content')}}</textarea>
        </div>
        <div class="form-group">
            <label for="img">Cover Image</label>
            <input type="file" name="cover_image" class="form-control">
        </div>
        <button style="border-radius: 0" type="submit" class="btn btn-primary mt-2 pull-right">Submit</button>
    </div>
  </form>
@endsection