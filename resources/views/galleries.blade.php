<style>
    .heroWrapper {
        min-height: 100vh;
    }

    .heroWrapper .gridWrapper {
        width: 90vw;
        margin: auto;
    }

    .heroWrapper .gridWrapper .subHeader {
        height: 10rem;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .heroWrapper .gridWrapper .subHeader p {
        color: #49676E;
        font-size: 40px

    }
</style>

@extends('layouts/layout')

@section('content')
    <div class="heroWrapper">
        <div class="gridWrapper">
            <div class="subHeader"><p>Gallery</p></div>
            
            <div class="firstGrid">
                <img src="{{asset('asset/img/Rectangle 16.png')}}" alt="">
            </div>
            <div class="secGrid">
                <img src="{{asset('asset/img/Rectangle 19.png')}}" alt="">
            </div>
            <div class="thirdGrid">
                <img src="{{asset('asset/img/Rectangle 20.png')}}" alt="">
            </div>
        </div>
    </div>
@endsection
