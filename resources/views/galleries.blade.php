<style>
    .heroBg {
        margin: auto;
    }

    .heroBg .header {
        display: flex;
        align-content: center;
        justify-content: center;
        /* height: 5rem; */
        padding: 5rem 0;
    }
    .heroBg .header p{
       color: #49676E;
       font-size: 40px;
    }

    .heroBg .heroSection .firstGrid {
        display: flex;
        gap: 4rem;
        height: 100%;
    }
    .heroBg .heroSection .firstGrid .firstSec {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
</style>

@extends('layouts/layout');

@section('content')
    <section class="heroBg">
        <div class="header">
            <p>Gallery</p>
            
        </div>
        <div class="heroSection">
            <div class="firstGrid">
                <div><img src="{{ asset('asset/img/Rectangle 16.png') }}" alt=""></div>
                <div class="firstSec">
                    <div><img src="{{ asset('asset/img/Rectangle 17.png') }}" alt=""></div>

                    <div><img src="{{ asset('asset/img/Rectangle 18.png') }}" alt=""></div>

                </div>
            </div>
        </div>
    </section>
@endsection
