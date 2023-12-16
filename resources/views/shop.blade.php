<style>
    .heroWrapper {
        min-height: 100vh;
        max-width: 100vw;
    }

    .heroWrapper .heroCont {
        max-width: 80%;
        margin: auto;
    }

    .heroWrapper .heroCont .subHeader {
        height: 10rem;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .heroWrapper .heroCont .subHeader p {
        color: #49676E;
        font-size: 40px;
    }

    .heroWrapper .heroCont .subHeader input[type="search"] {
        width: 20rem;
        opacity: 1;
        overflow: hidden;
        transition: max-height 5s ease, opacity 1s ease;
    }

    .heroWrapper .heroCont .subHeader input[type="search"].active {
        max-height: 0;
        opacity: 0;
        overflow: hidden;
        width: 20rem;
    }
</style>


@extends('layouts/layout')

@section('content')
    <div class="heroWrapper">
        <div class="heroCont">
            <div class="subHeader">
                <p>Shop</p>
                <div style="display: flex;">
                    <input type="search" id="searchInput" placeholder="Search" class="active">
                    <p id="searchIcon">🔍</p>
                </div>
            </div>
        
            <div>
                <div class="flex justify-between">
                    <div>
                        <img src="{{asset('asset/img/Rectangle 32.png')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('asset/img/Rectangle 33.png')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('asset/img/Rectangle 34.png')}}" alt="">
                    </div>
                </div>
                <div></div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script src="{{ asset('/js/script.js') }}"></script>
    @endpush
@endsection
