

@php
  // Get the current route name
  $page = Route::currentRouteName();

  // Define an array of active pages
  $activePages = [
      'home',
      'galleries',
      'videos',
      'shop',
  ];
@endphp



<div class="navBg">
    <div class="logo"><a href="#">LOGO</a></div>
    <div class="cont">
        <ul id="navLinks">
            <li><a href="{{ asset('/home') }}">Home</a></li>
            <li><a href="{{ asset('/galleries') }}">Galleries</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="{{ asset('/shop') }}">Shop</a></li>
        </ul>
    </div>

    @guest
        <div>
            <a href="{{ asset('/login') }}"><button>LOGIN</button></a>
        </div>
    @endguest



    <div class="addToCart"><a href="#"><img src="{{ asset('asset/icons/icons8-favorite-cart-80 1.png') }}" alt="Add To Cart Icon"></a></div>

    @auth
<!-- Show the welcome message and logout button if the user is authenticated -->
<div>
    <h4> {{ auth()->user()->full_name }}</h4>
    <a href="{{ asset('/logout') }}"><button>LOGOUT</button></a>
</div>
@endauth
</div>


@push('scripts')
    <script src="{{ asset('asset/js/script.js') }}" defer></script>
@endpush
