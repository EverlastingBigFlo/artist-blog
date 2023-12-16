<style>
    .heroWrapper .heroCont .subHeader input[type="search"].active {
        max-height: 0;
        opacity: 0;
        overflow: hidden;
        width: 20rem;
    }
</style>


@extends('layouts/layout')

@section('content')
    <div class="heroWrapper min-h-full max-w-[100vw] ">
        <div class="heroCont max-w-[80%] m-auto ">
            <div class="subHeader h-40 flex justify-around items-center">
                <p class="text-[49676E] text-[40px]">Shop</p>
                <div class="flex">
                    <input type="search" id="searchInput" placeholder="Search"
                        class="active w-80 h-[35px] rounded-lg border border-gray-300 opacity-100 overflow-hidden transition-max-height-5000 ease-linear">
                    <p id="searchIcon">🔍</p>
                </div>
            </div>

            <div class="p-10">
                <div class="flex justify-between">
                    <div class="flex items-center flex-col">
                        <img src="{{ asset('asset/img/Rectangle 32.png') }}" alt="">
                        <h4 class="text-[30px] text-[49676E] p-5">Heading</h4>
                        <p class="text-[25px] text-[49676E]">₹ 500</p>
                    </div>
                    <div class="flex items-center flex-col">
                        <img src="{{ asset('asset/img/Rectangle 33.png') }}" alt="">
                        <h4 class="text-[30px] text-[49676E] p-5">Heading</h4>
                        <p class="text-[25px] text-[49676E]">₹ 500</p>
                    </div>
                    <div class="flex items-center flex-col">
                        <img src="{{ asset('asset/img/Rectangle 34.png') }}" alt="">
                        <h4 class="text-[30px] text-[49676E] p-5">Heading</h4>
                        <p class="text-[25px] text-[49676E]">₹ 500</p>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="flex items-center flex-col">
                        <img src="{{ asset('asset/img/Rectangle 35.png') }}" alt="">
                        <h4 class="text-[30px] text-[49676E] p-5">Heading</h4>
                        <p class="text-[25px] text-[49676E]">₹ 500</p>
                    </div>
                    <div class="flex items-center flex-col">
                        <img src="{{ asset('asset/img/Rectangle 36.png') }}" alt="">
                        <h4 class="text-[30px] text-[49676E] p-5">Heading</h4>
                        <p class="text-[25px] text-[49676E]">₹ 500</p>
                    </div>
                    <div class="flex items-center flex-col">
                        <img src="{{ asset('asset/img/Rectangle 37.png') }}" alt="">
                        <h4 class="text-[30px] text-[49676E] p-5">Heading</h4>
                        <p class="text-[25px] text-[49676E]">₹ 500</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script src="{{ asset('/js/script.js') }}"></script>
    @endpush
@endsection
