@extends('/layouts/layout')

@section('content')
    <section>
        <div class="heroSection">
            <img src="{{ asset('img/Rectangle 4.png') }}" alt="">
        </div>

        {{-- second image section --}}
        <div class="anotherSection">
            <img src="{{ asset('img/Rectangle 6.png') }}" alt="">
            <img src="{{ asset('img/Rectangle 7.png') }}" alt="">
        </div>

        {{-- write up section --}}

        <div class="meanSection">
            <h1>
                MY ART MEANS TO ME
            </h1>
            <p>
                What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a
                type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                including
                versions of Lorem Ipsum.
            </p>
        </div>
    </section>
@endsection
