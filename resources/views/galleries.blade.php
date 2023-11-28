<style>
    .heroWrapper {
        min-height: 100vh;
    }

    .heroWrapper .gridWrapper {
        width: 80vw;
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

    .heroWrapper .gridWrapper .firstGrid {
        display: flex;
        gap: 5rem;
    }
</style>

@extends('layouts/layout')

@section('content')
    <div class="heroWrapper">
        <div class="gridWrapper">
            <div class="subHeader">
                <p>Gallery</p>
            </div>

            <div class="firstGrid">
                <img src="{{ asset('asset/img/Rectangle 16.png') }}" alt="">
                <div>
                    <img src="{{ asset('asset/img/Rectangle 17.png') }}" alt="">
                    <img src="{{ asset('asset/img/Rectangle 18.png') }}" alt="">

                </div>
            </div>
            <div class="secGrid">
                <img src="{{ asset('asset/img/Rectangle 19.png') }}" alt="">
            </div>
            <div class="thirdGrid">
                <img src="{{ asset('asset/img/Rectangle 20.png') }}" alt="">
            </div>
        </div>
    </div>
@endsection
