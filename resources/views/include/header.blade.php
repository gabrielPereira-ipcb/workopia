{{-- TODO: ARRUMAR O ESTILO --}}
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">Workopia</a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
              Dashboard
            </a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('task.*') ? 'active' : '' }}" href="{{ route('task.add') }}">
              {{-- Tasks --}}
            </a>
          </li>
          @endauth
        </ul>

        <div class="d-flex">
          @auth
            <a class="btn btn-success me-2" href="{{ route('task.add') }}">
              <i class="fas fa-plus"></i> Add Task
            </a>
            {{-- <form action="{{ route('logout') }}" method="POST" class="d-inline">
              @csrf
              <button type="submit" class="btn btn-outline-danger">Logout</button>
            </form> --}}
          @else
            <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
          @endauth
        </div>
      </div>
    </div>
  </nav>
</header>

