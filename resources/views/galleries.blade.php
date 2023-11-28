<style>
    .heroBg {
        margin: auto;
    }

    .heroBg .header {
        display: flex;
        align-content: center;
        justify-content: center;
    }

    .firstGrid {
        display: flex;
        gap: 4rem;
    }
</style>

@extends('layouts/layout');

@section('content')
    <section class="heroBg">
        <div class="header">
            <h1>Gallery</h1>

        </div>
        <div class="heroSection">
            <div class="firstGrid">
                <div><img src="{{ asset('asset/img/Rectangle 16.png') }}" alt=""></div>
                <div>
                    <div><img src="{{ asset('asset/img/Rectangle 17.png') }}" alt=""></div>

                    <div><img src="{{ asset('asset/img/Rectangle 18.png') }}" alt=""></div>

                </div>
            </div>
        </div>
    </section>
@endsection
