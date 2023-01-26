@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ( $categories as $category )
                <div class="col-md-4 mb-5 img-fluid">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card text-bg-dark text-white">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}"
                            class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">
                            {{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>



    <style>
        .card {
  box-sizing: border-box;
  width: 300px;
  height: 280px;
  background: rgba(217, 217, 217, 0.58);
  border: 1px solid white;
  box-shadow: 12px 17px 51px rgba(0, 0, 0, 0.22);
  backdrop-filter: blur(6px);
  border-radius: 17px;
  text-align: center;
  cursor: pointer;
  transition: all 0.5s;
  display: flex;
  align-items: center;
  justify-content: center;
  user-select: none;
  font-weight: bolder;
}

.card-img {
    border-radius: 10px;
}

.card:hover {
  border: 1px solid black;
  transform: scale(1.05);
  width: 250px;
}

.card:active {
  transform: scale(0.95) rotateZ(1.7deg);
}

    </style>

@endsection

