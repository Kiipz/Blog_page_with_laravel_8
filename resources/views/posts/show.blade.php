@extends('layouts.app')

@section('content')
    <div class="mt-2">
        <a style="text-decoration: none" href="{{ asset('/') }}"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    <div class="card bg-light shadow bg-body rounded-3 mb-2 mt-2">
        <div class="card-body">
            <h2 class="card-title">
                <h2>{{ $post->title }}</h2>
            </h2>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img style="width: 100%" src="{{ asset('/storage/cover_images') }}/{{$post->cover_image}}" alt="post_image">
                </div>
                <div class="col-12">
                    <p class="card-text">{!! $post->body !!}</p>
                </div>
            </div>
            
            <div class="d-flex text-center border-top border-1 pt-2">
                
                <small class="pt-2 pb-2 me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                    Date: {{ $post->created_at }}
                </small>
                <div class="btn-group pt-2 pb-2 me-2 ms-auto">
                    <a style="border-radius: 0" href="{{ asset('/posts')}}/{{$post->id}}/edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a>
                    <form action="{{ asset('/posts')}}/{{ $post->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button style="border-radius: 0" type="submit" class="btn btn-danger bt-sm"><i class="far fa-trash-alt"></i></button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
@endsection