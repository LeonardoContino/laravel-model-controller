<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Movie</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link @if (Route::is('home')) active @endif" href="{{url('/')}}">Home</a>
              <a class="nav-link @if (Route::is('about')) active @endif" href="{{ route('about') }}">About</a>
              <a class="nav-link @if (Route::is('contacts')) active @endif" href="{{ route('contacts') }}">Contacts</a>

            </div>
          </div>
        </div>
      </nav>
</header>