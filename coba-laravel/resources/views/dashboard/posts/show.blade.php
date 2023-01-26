@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
         <h1 class="mb-3">{{ $post->title }}</h1>

         <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-bar-left icon"></i> Back
           </a>
         <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-white"><i
            class="bi bi-pencil-square icon"></i> Edit</a>
         <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <a class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')"><i class="bi bi-x-circle icon"></i> Delete</a>
        </form>

        {{-- Image --}}
        @if($post->image)
          <div style="max-height: 350px; overflow: hidden;">
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
            class="img-fluid mt-3 rounded">
          </div>
        @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="
            {{ $post->category->name }}" class="img-fluid mt-3 rounded">
        @endif




         <article class="my-3 fs-6">
             {!! $post->body !!}
         </article>

    </div>
  </div>
</div>

<style>

    a .icon:hover  {
        color: black;
    }

    div a:hover {
        color: black;
    }

  </style>

@endsection
