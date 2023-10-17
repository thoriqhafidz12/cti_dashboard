<nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="Assets\logo_cocotaru.png" alt="Logo" width="200" height="auto" class="img-nav">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav   ms-auto mb-2 mb-lg-0">
          @if (auth()->guest())
            <li class="nav-item">
              <a class="btn" href="/login" style="background-color: #a36700;color:white">SIGN IN</a>
            </li>
          @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{ Auth::user()->full_name }}</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('menu') }}">Dashboard</a></li>
              </ul>
            </li>
          @endif
          <li class="nav-item">
            <a class="nav-link about-us-link" aria-current="page" href="/">About Us</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link about-us-link" href="#products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link about-us-link" href="#values">Values</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link about-us-link" href="{{ route('catalog') }}">Catalog</a>
          </li>

          {{--VIEW KERANJANG  --}}
          @can('admin')
          <li class="nav-item">
            <a class="nav-link about-us-link" href="{{ route('keranjang') }}">Keranjang</a>
          </li>
          @endcan
          {{-- <li class="nav-item">
            <a class="nav-link about-us-link" href="#contacts">Contacts</a>
          </li> --}}
          
          
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->