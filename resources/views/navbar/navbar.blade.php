
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="{{route('app_formulaire')}}"> {{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"       aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link @if(Request::route()->getName()=='app_home') active @endif"
                aria-current="page" href="{{ route('app_home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Request::route()->getName()=='app_about') active @endif"
            aria-current="page" href="{{ route('app_about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Request::route()->getName()=='app_dashboard') active @endif"
            aria-current="page" href="{{ route('app_dashboard') }}">Dashboard</a>
          </li>
          </ul>





          <div class="btn-group">

            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              My account
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('app_formulaire')}}">Formulaire</a></li>
              <li><a class="dropdown-item" href="#">Login</a></li>
              <li><a class="dropdown-item" href="#">Register</a></li>

            </ul>

          </div>


      </div>
    </div>
  </nav>
