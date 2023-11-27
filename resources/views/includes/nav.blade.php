@php
  // Get the current path
  $path = Request::path();

// Remove the trailing slash (if any) and get the last part of the path
$page = rtrim($path, '/');

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
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Galleries</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="#">Shop</a></li>
        </ul>
    </div>
    <div class="addToCart"><a href="#"><img src="{{ asset('/icons/icons8-favorite-cart-80 1.png') }}"
                alt="Add To Cart Icon"></a></div>
</div>
