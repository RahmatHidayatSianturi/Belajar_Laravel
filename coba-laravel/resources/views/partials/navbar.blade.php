<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow rounded-bottom"  style="background-color: #e01616;">
    <div class="container">
        <div class="pseudo-elemen">
             <a class="navbar-brand title-pkl" href="/"><i class="fa-solid fa-rocket text-white"></i> <strong>PKL BLOG | IS</strong></a>
        </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse napbar" id="navbarNav">
        <ul class="navbar-nav py-2 napbar1">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'btn btn-warning active text-dark' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('posts') ? 'btn btn-warning active text-dark' : '' }}" href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('categories') ? 'btn btn-warning active text-dark' : '' }}" href="/categories">Categories</a>
          </li>
        </ul>


        <ul class="navbar-nav ms-auto">
                @auth
                   <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-user"></i> Welcome Back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown">
                        <li><a class="dropdown-item" href="/dashboard"><i class="fa-solid fa-server"></i> My Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="fa-solid fa-arrow-right"></i>
                                     Logout</button>
                            </form>
                        </li>
                        </ul>
                  </li>
                @else
                <li class="nav-item item">
                    <a href="/login" class="cta">
                        <span class="hover-underline-animation"><i class="fa-solid fa-key"></i> Login now </span>
                        {{-- <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
                            <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10" id="Path_10"></path>
                        </svg> --}}
                    </a>
                </li>
                @endauth
            </ul>

      </div>
    </div>
  </nav>

  <style>
#navbarNav .napbar1 li a:hover {
    color: #fff;
}
#navbarNav .napbar1 li a::after {
    content: "";
    display: block;
    padding-bottom: 0.2rem;
    border-bottom: 0.1rem solid #fff;
    transform: scaleX(0);
    transition: 0.4s;
}

#navbarNav .napbar1 li a:hover::after {
  transform: scaleX(0.6);
}
    /* Login */
    .cta {
  border: none;
  background: none;
  text-decoration: none;
}

.cta span {
  padding-bottom: 7px;
  letter-spacing: 3px;
  font-size: 14px;
  padding-right: 10px;
  text-transform: uppercase;
  color: white
}

.cta svg {
  transform: translateX(-8px);
  transition: all 0.3s ease;
  color: white;
}

.cta:hover svg {
  transform: translateX(0);
  color: white;
}

.cta:active svg {
  transform: scale(0.9);
}

.hover-underline-animation {
  position: relative;
  color: white;
  padding-bottom: 20px;
}

.hover-underline-animation:after {
  content: "";
  position: absolute;
  width: 90%;
  transform: scaleX(0);
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: white;
  transform-origin: bottom right;
  transition: transform 0.25s ease-out;
}

.cta:hover .hover-underline-animation:after {
  transform: scaleX(1);
  transform-origin: bottom left;
}

.item {
    display: inline-block;
    margin-bottom: 3px;
}

.title-pkl {
    text-shadow: 1px 2px 1px #000000
}
  </style>


