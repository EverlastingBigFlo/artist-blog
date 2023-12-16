@php
    // Get the current route name
    $page = Route::currentRouteName();

    // Define an array of active pages
    $activePages = ['home', 'galleries', 'videos', 'shop'];
@endphp



<div class="navBg bg-[#c0c6b9] flex justify-around items-center h-[101px]">
    <div class="logo"><a href="{{asset('/home')}}" class=" text-5xl text-[#49676e] hover:text-black">LOGO</a></div>
    <div class="cont">
        <ul id="navLinks" class="flex gap-[45px]">
            <li><a href="{{ asset('/home') }}" class=" hover:text-black text-[25px] text-[#49676E]">Home</a></li>
            <li><a href="{{ asset('/galleries') }}" class=" hover:text-black text-[25px] text-[#49676E]">Galleries</a></li>
            <li><a href="#" class=" hover:text-black text-[25px] text-[#49676E]">Videos</a></li>
            <li><a href="{{ asset('/shop') }}" class=" hover:text-black text-[25px] text-[#49676E]">Shop</a></li>
        </ul>
    </div>
    




    <div class="addToCart flex gap-5"><a href="#"><img class="text-[#49676E]" src="{{ asset('asset/icons/icons8-favorite-cart-80 1.png') }}"
                alt="Add To Cart Icon"></a>
                @guest
                <div>
                    <a href="{{ asset('/login') }}" class="text-[#49676E]">Login</a>
                </div>
            @endguest
            </div>
                

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
