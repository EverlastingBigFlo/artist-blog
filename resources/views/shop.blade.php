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
        justify-content: space-between;
        align-items: center;
        width: 50%;
    }

    .heroWrapper .heroCont .subHeader p {
        color: #49676E;
        font-size: 40px
    }
    .heroWrapper .heroCont .subHeader .iconWrapper {
        display: flex;
        gap: 3rem;
    }
</style>

@extends('layouts/layout')

@section('content')
    <div class="heroWrapper">
        <div class="heroCont">
            <div class="subHeader">
                <p>Shop</p>
                <div class="iconWrapper">
                    <img src="{{asset('asset/icons/Vector (2).png')}}" alt="">
                    <img src="{{asset('asset/icons/Vector (1).png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
