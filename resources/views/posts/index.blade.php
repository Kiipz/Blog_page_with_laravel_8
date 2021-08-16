@extends('layouts.app')

@section('content')
    <h2 class="line"><span>My Posts</span></h2>
    @if (count($posts)>0)
        @foreach ($posts as $post)
        <div class="card bg-light shadow bg-body rounded-3 mb-2">
            <div class="card-body">
                <h2 class="card-title">
                    <a href="posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <div class="row">
                    <div class="col-4">
                        <img style="width: 100%" src="{{ asset('/storage/cover_images') }}/{{$post->cover_image}}" alt="post_image">
                    </div>
                    <div class="col-8">
                        <p class="card-text">
                            {!! substr(strip_tags($post->body), 0, 500) !!}
                            {!! strlen(strip_tags($post->body)) > 50 ? "...ReadMore" : "" !!} 
                            {{-- {!! $post->body !!} --}}
                        </p> 
                    </div>
                </div>

                <div class="d-flex text-center border-top border-1 pt-2">
                    <small class="pt-2 pb-2 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                        By: created_by
                    </small>
                    <small class="pt-2 pb-2 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                        Date: {{ $post->created_at }}
                    </small>
                    <small class="pt-2 pb-2 me-2 ms-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                        </svg>
                    </small>
                </div>
            </div>
        </div>
        @endforeach
    @else
        <p class="">No Post Available</p>
    @endif
@endsection