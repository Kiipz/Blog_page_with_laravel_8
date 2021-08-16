@extends('layouts.app')

@section('content')
<div class="mt-4">
    <div class="justify-content-center">
        <div class="row">
            {{-- bog body --}}
            <div class="col-lg-10 col-md-10 col-sm-12">
                <a style="text-decoration: none" href="{{ asset('/') }}"><i class="fas fa-arrow-left"></i> Back</a>
                <div class="card bg-light shadow bg-body rounded-3 mb-2 mt-4">
                    <div class="card-body">
                        <h2 class="card-title">
                            <h2>{{ $post->title }}</h2>
                        </h2>
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-sm-12">
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
                            
                        </div>
                    </div>
                </div>
            </div>
            {{-- end of blog body --}}
            {{-- right side column --}}
            {{-- <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="bg-light shadow bg-body rounded-3 mb-3">
                    <div class="card-header bg-primary bg-gradient text-white fw-bold fs-5">
                        Random Articles
                    </div>

                    <ul class="list-group list-group-flush mb-2">
                        @if (count($posts)>0)
                            @foreach ($posts as $post)
                            <li class="list-group-item">
                                <a style="text-decoration: none" href="#"><h5>{{ $post->title }}</h5></a>
                                <div>
                                    <small class="text-muted">{{ $post->created_at }}</small>
                                </div>
                            </li>
                            @endforeach
                        @else
                            <p>No post in the blog.</p>
                        @endif
                    </ul>

                </div>
            </div> --}}
            {{-- end of right side column --}}
        </div>
    </div>
</div>
@endsection
