

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
            <li><a href="{{asset('/galleries')}}">Galleries</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="{{asset('/shop')}}">Shop</a></li>
        </ul>
    </div>
    <div class="addToCart"><a href="#"><img src="{{ asset('asset/icons/icons8-favorite-cart-80 1.png') }}"
                alt="Add To Cart Icon"></a></div>
</div>

@push('scripts')
<script src="{{ asset('asset/js/script.js') }}" defer></script>
@endpush


