<style>
    .heroWrapper {
        height: 100vh;
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
            <div class="subHeader">
                <p>Gallery</p>
            </div>
        </div>
    </div>
@endsection
