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
            cursor: pointer;
            display: block;
        }

        .heroWrapper .heroCont .subHeader input[type="search"] {
            width: 150px; /* Set the initial width to the desired size */
            opacity: 1; /* Set the initial opacity to fully visible */
            display: block; 
            transition: width 0.5s ease, opacity 0.5s ease;
        }

        .heroWrapper .heroCont .subHeader input[type="search"].active {
            display: none; /* Show the search input when active */
        }
</style>

@extends('layouts/layout')

@section('content')
    <div class="heroWrapper">
        <div class="heroCont">
            <div class="subHeader">
                <p>Shop</p>
                <div>
                    <p id="searchIcon">🔍</p>
                <input type="search" id="searchInput" placeholder="Search" class="active">
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{asset('/js/script.js')}}"></script>
    @endpush
@endsection
