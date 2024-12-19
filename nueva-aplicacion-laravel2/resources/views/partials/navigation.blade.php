{{-- <ul>



        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        <li><a href="{{ route(name: 'about') }}">About</a></li>
        <li><a href="{{ route('blog') }}">Blog</a></li>
        <li><a href="{{ route('animals') }}">Animals</a></li>

</ul> --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Mi primer proyecto Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route(name: 'about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('blog') }}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('animals') }}">Animals</a>
              </li>
           
          </ul>
        </div>
      </nav>