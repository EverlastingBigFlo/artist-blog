@extends('/layouts/layout')

@section('content')
    <section>
       @auth
       <h1>Welcome {{auth()->user()->full_name}}</h1>
       @endauth
        <div class="heroSection">
            <img src="{{ asset('asset/img/Rectangle 4.png') }}" alt="">
        </div>

        {{-- second image section --}}
        <div class="anotherSection">
            <img src="{{ asset('asset/img/Rectangle 6.png') }}" alt="">
            <img src="{{ asset('asset/img/Rectangle 7.png') }}" alt="">
        </div>
    </section>

    <section>

         {{-- write up section --}}

         <div class="meanSection">
            <h1>
                MY ART MEANS TO ME
            </h1>
            <p>
                What is Lorem Ipsum?
                <br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy <br>
                text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a <br>
                type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially <br>
                unchanged. It was popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, and more recently <br>
                with desktop publishing software like Aldus PageMaker including <br>
                versions of Lorem Ipsum.
            </p>
        </div>
    </section>

    {{-- subscribe section --}}
    <section>
       <form action="{{route('subscribe')}}" method="POST">
        <div class="subscribeSec">
            <h1>
                NEWSLETTER
            </h1>
            <h4>
                A monthly newsletter keeping you up yo date.
            </h4>

            <div class="form">
                <div class="emailBtn">
                    <input type="email" name="email" placeholder="Email" id="emailInput">
                    <button type="submit">Subscribe</button>
                </div>

                <input type="email" name="email" placeholder="Message" id="message">
            </div>
        </div>
       </form>
    </section>
@endsection
