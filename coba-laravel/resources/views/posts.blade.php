@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center" style="padding-top: 3.5rem">Semua Postingan Blog</h1>


    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search">
                    <button class="btn btn-danger" type="submit">Search</button>
                  </div>
            </form>
        </div>
    </div>


    @if ($posts->count())
    <div class="card mb-3">
        @if($posts[0]->image)
          <div style="max-height: 400px; overflow: hidden;">
            <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
            class="img-fluid">
          </div>
        @else
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}"
        class="card-img-top" alt="{{ $posts[0]->category->name }}">
        @endif


        <div class="card-body text-center">
          <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
            class="text-decoration-none text-dark">{{ $posts[0]->title  }}</h3></a>
          <p>
            <small class="text-muted">
            By. <a href="/posts?author={{ $posts[0]->author->username }}"
            class="text-decoration-none">{{
            $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}"
            class="text-decoration-none">{{ $posts[0]
            ->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
          </p>

          <p class="card-text">{{ $posts[0]->excerpt }}</p>

          <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>

        </div>
      </div>


      <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3" data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
                {{-- <div class="col-md-4 mb-3"> --}}
                    <div class="card">
                        <div class="position-absolute bg-dark px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                        <a href="/posts?category={{ $post->category->slug }}" class="text-white
                        text-decoration-none">{{ $post->category->name }}</a></div>
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                        @else
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                            class="card-img-top" alt="{{ $post->category->name }}">
                        @endif

                        <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p>
                            <small class="text-muted">
                            By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{
                            $posts[0]->author->name }}</a>  {{ $post->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $post->excerpt }}</p>

                        {{-- <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a> --}}

                        <a href="/posts/{{ $post->slug }}" class="button text-white" style="vertical-align:middle"><span style="font-size: 15px;">Read</span></a>

                        </div>
                    </div>
                {{-- </div> --}}
            </div>
               @endforeach
            </div>
        </div>

      @else
        <p class="text-center fs-4">No Post found.</p>
      @endif

       <div class="d-flex justify-content-end">
           {{ $posts->links() }}
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
 content: 'more';
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

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
@endsection

