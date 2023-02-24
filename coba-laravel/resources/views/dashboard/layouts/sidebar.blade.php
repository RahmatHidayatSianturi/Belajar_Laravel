<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">

        {{-- Dashboard --}}
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('dashboard') ? 'active' : '' }}"
          aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            <i class="fa-solid fa-house-user"></i>
            <strong>Dashboard</strong>
          </a>
        </li>

        {{-- Posts --}}
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text" class="align-text-bottom"></span>
            <i class="fa-solid fa-file-lines"></i>
            <strong>My Posts</strong>
          </a>
        </li>

        {{-- back to home --}}
        <li class="nav-item">
            <a class="nav-link" href="/" style="text-decoration: underline"><i class="fa-solid fa-arrow-left"></i> <strong>HOME</strong></a>
        </li>
      </ul>



      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link  {{ Request::is('/dashboard/categories*') ? 'active' : '' }}" href="
            /dashboard/categories">
                <i class="bi bi-grid-fill"></i>
                Post Categories
            </a>
        </li>
      </ul>
      @endcan


    </div>
  </nav>

  {{-- <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script> --}}
