@extends('/layouts/layout')

@section('content')
    <section>
        <div class=" w-[72.875rem] h-[39rem] m-auto flex justify-center">
            <img class=" m-auto" src="{{ asset('asset/img/Rectangle 4.png') }}" alt="">
        </div>

        {{-- second image section --}}
        <div class="w-[72.875rem] h-[32.5rem] flex items-center justify-center gap-12 m-auto">
            <img class=" max-w-full max-h-full" src="{{ asset('asset/img/Rectangle 6.png') }}" alt="">
            <img class=" max-w-full max-h-full" src="{{ asset('asset/img/Rectangle 7.png') }}" alt="">
        </div>
    </section>

    <section>

        {{-- write up section --}}

        <div class=" max-w-[72.875rem] flex flex-col items-center justify-center m-auto">
            <h1 class="text-[#49676E] text-4xl font-extralight text-center pb-8">
                MY ART MEANS TO ME
            </h1>
            <p class="text-[#49676E] max-w-[1043px] text-[20px] text-center pt-8">
                My art means to me a journey into self-discovery, a canvas where emotions find expression, and a sanctuary
                where creativity knows no bounds. It's a profound exploration of the inner landscape, a mirror reflecting my
                thoughts, dreams, and perceptions. Each stroke of the brush carries a piece of my soul, transforming the
                blank canvas into a realm of colors and shapes that narrate stories beyond words.

                Art, to me, is a language that transcends barriers and speaks to the hearts of those who witness it. It's a
                therapeutic escape, a cathartic process that allows me to navigate the complexities of life. Through my art,
                I strive to capture the essence of fleeting moments, encapsulating emotions that might be difficult to
                articulate verbally. It's a visual diary, documenting my experiences and encapsulating the beauty found in
                the ordinary.

                Moreover, my art serves as a bridge connecting me with others, fostering a shared understanding of the human
                experience. It invites viewers to interpret, reflect, and connect with the pieces on a personal level. In
                this way, art becomes a vessel for communication, fostering connections that transcend cultural, linguistic,
                and geographical boundaries.

                In conclusion, my art is more than just strokes on a canvas; it's an introspective journey, a universal
                language, and a medium that fosters connection and understanding. It breathes life into the intangible and
                transforms the mundane into the extraordinary.
        </div>
    </section>

    {{-- subscribe section --}}
    <section>
        <form action="{{ route('subscribers') }}" method="post">
            @csrf
            <div class="subscribeSec w-[72.875rem] h-[348px] flex flex-col items-center justify-center m-auto">
                <h1 class="text-[35px] font-extralight text-center text-[#49676E] pt-[10rem] pb-[2rem]">
                    NEWSLETTER
                </h1>
                <h4>
                    A monthly newsletter keeping you up you date.
                </h4>

                <div class="form">
                    <div class="emailBtn">
                        <input type="email" name="email" placeholder="Email" id="emailInput"
                            value="{{ old('email') }}">
                        <span style="color: red">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                        <button type="submit">Subscribe</button>
                    </div>

                    <input type="text" name="message" placeholder="Message" id="message" value="{{ old('message') }}">
                    <span style="color: red">
                        @error('message')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
        </form>
    </section>
@endsection
