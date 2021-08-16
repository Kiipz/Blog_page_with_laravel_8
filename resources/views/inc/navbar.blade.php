<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="nav-link {{ Request::is('/')? 'active':'' }}" href="{{ asset('/') }}">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          @if (Auth::guest())
              {{-- /// --}}
          @else
            <a class="nav-link {{ Request::is('/posts/create')? 'active':'' }}" href="{{ asset('/posts/create') }}">Create Post</a>
          @endif
        </li>
        <li class="nav-item">
          @if (Auth::guest())
              {{-- /// --}}
          @else
            <a class="nav-link {{ Request::is('/posts')? 'active':'' }}" href="{{ asset('/posts') }}">My Post</a>
          @endif
        </li>
      </ul>
      <div>
        <ul class="navbar-nav text-right list-inline">
          @if (Auth::guest())
            <li class="nav-item">
              <a href="{{ route('login') }}" class="nav-link">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('register') }}" class="nav-link">{{ __('Register') }}</a>
            </li>
          @else
            <li class="dropdown" style="padding-right: 10px">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownbtn" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownbtn">
                  <li><a style="padding: 2px" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
              </ul>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </div>
</nav>