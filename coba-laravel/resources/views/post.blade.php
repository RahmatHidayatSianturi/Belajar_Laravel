@extends('layouts/main')

@section('container')

    <div class="container mt-5">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
             <h1 class="mb-3 mt-5">{{ $post->title }}</h1>

             <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{
             $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}"
             class="text-decoration-none">{{ $post->category->name }}</a></p>

             @if($post->image)
                <div style="max-height: 350px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                    class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="
                {{ $post->category->name }}" class="img-fluid">
            @endif



             <article class="my-3 fs-8" style="font-family: Poppins; font-size: 20px;">
                 {!! $post->body !!}
             </article>

            {{-- <a href="/posts" class="d-block mt-3">Back to Posts</a> --}}

            <a href="/posts" class="button text-white" style="vertical-align:middle"><span style="font-size: 15px;">Back to</span></a>

        </div>
      </div>
    </div>

    <style>
        .button {
 display: inline-block;
 border-radius: 7px;
 border: none;
 background: #1875FF;
 color: white;
 font-family: inherit;
 text-align: center;
 font-size: 13px;
 box-shadow: 0px 14px 56px -11px #1875FF;
 width: 10em;
 padding: 1em;
 transition: all 0.4s;
 cursor: pointer;
}

.button span {
 cursor: pointer;
 display: inline-block;
 position: relative;
 transition: 0.4s;
}

.button span:after {
 content: 'Posts';
 position: absolute;
 opacity: 0;
 top: 0;
 right: -15px;
 transition: 0.7s;
}

.button:hover span {
 padding-right: 3.55em;
}

.button:hover span:after {
 opacity: 4;
 right: 0;
}
    </style>
@endsection

