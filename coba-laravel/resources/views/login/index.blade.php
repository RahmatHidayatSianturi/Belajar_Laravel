@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button"
                    class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button"
                    class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center border-bottom p-2">Please Login</h1>
            <form action="/login" method="post">
                @csrf

                {{-- Email --}}
              <div class="form-floating">
                <input type="email" name="email" class="form-control" @error('email') is-invalid @enderror id="email"
                placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              {{-- Email --}}

              {{-- Captcha Img --}}
              {{-- <div class="form-group mt-4 mb-4">
                <div class="captcha">
                    <span>{!! captcha_img('math') !!}</span>
                    <button type="button" class="btn btn-danger" class="reload" id="reload">
                        &#x21bb;
                    </button>
                </div>
            </div> --}}
            {{-- Captcha Img --}}

            {{-- Input Captcha --}}
            {{-- <div class="form-group mb-4">
                <input id="captcha" type="text" class="form-control @error('captcha') is-invalid @enderror" placeholder="Enter Captcha" name="captcha">
                @error('captcha')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div> --}}
            {{-- Input Captcha --}}

            {{-- Password --}}
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
            {{-- Password --}}

            {{-- Get button Login--}}
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            {{-- Get button Login--}}

            </form>
            <div class="loader"></div>
            <small class="d-block text-center mt-3">Belum buat Account? <a href="/register" style="text-decoration: none">Buat Sekarang!</a></small>

          </main>
    </div>
</div>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
{{-- captcha --}}
{{-- <script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script> --}}

<style>
    .loader {
 --height-of-loader: 4px;
 --loader-color: #0071e2;
 width: 100%;
 height: var(--height-of-loader);
 border-radius: 30px;
 background-color: rgba(0,0,0,0.2);
 position: relative;
 margin-top: 3px;
}

.loader::before {
 content: "";
 position: absolute;
 background: var(--loader-color);
 top: 0;
 left: 0;
 width: 0%;
 height: 100%;
 border-radius: 30px;
 animation: moving 1s ease-in-out infinite;
 ;
}

@keyframes moving {
 50% {
  width: 100%;
 }

 100% {
  width: 0;
  right: 0;
  left: unset;
 }
}
</style>

@endsection
