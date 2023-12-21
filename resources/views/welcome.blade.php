<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    {{-- <style>
        * {
            font-family: 'Cormorant Garamond', serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .welcomePage {
            border: 2.5rem solid black;
            max-width: 100vw;
            height: 100vh;
            display: flex;
            margin: auto;

        }

        .welcomePage header .navBg {
            max-height: 100%;
            margin-top: 4rem;
        }

        .welcomePage header .navBg .logo a {
            text-decoration: none;
            font-size: 50px;
            color: #49676E;
            padding-left: 5rem;
            padding-top: 5rem;
            transform: translateY(5rem);
        }

        .welcomePage header .navBg .logo a:hover {
            color: black;
        }

        .welcomePage .heroSection {
            position: relative;
            max-width: 10rem;
            max-height: 100%;
        }

        .welcomePage .heroSection .largeImage {
            position: absolute;
            transform: translateY(11rem);
        }

        .welcomePage .heroSection .mediumImage {
            position: absolute;
            left: 27rem;
            top: 25rem;
        }

        .welcomePage .heroSection .smallImage {
            position: absolute;
            left: 23rem;
            top: 4rem;
        }

        .welcomePage .heroSection .welcomeBtn {
            position: absolute;
            left: 37rem;
            top: 15rem;


        }

        .welcomePage .heroSection .welcomeBtn a button {
            background-color: #EAE7DC;
            border: 4px solid #49676E;
            border-radius: 10px;
            padding: 1.4rem 3rem;
            font-size: 25px;
            color: #49676ebb;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.5);

        }
    </style> --}}
    @vite('resources/css/app.css')
</head>

<body>
    <div
        class="welcomePage border-[2.5rem] border-black sm:h-screen 
        md:h-screen lg:h-screen xl:h-screen 2xl:h-screen  sm:w-screen 
        md:w-screen lg:w-screen xl:w-screen 2xl:w-screen overflow-hidden">
        {{-- nav --}}
        <header>
            <div class="navBg sm:max-h-full md:max-h-full lg:max-h-full xl:max-h-full 2xl:max-h-full mt-16">
                <div class="logo hover:text-black"><a
                        class=" text-5xl text-[#49676E] hover:text-black pl-20 pt-20 transform translate-y-20"
                        href="{{ asset('/') }}">LOGO</a></div>
            </div>
        </header>

        {{-- heroSection --}}

        <section class="overflow-hidden relative flex m-auto ">
            <div class="heroSection max-w-[80%] max-h-[80%]">
                <div class="largeBtn flex items-center gap-[5rem] absolute object-cover">
                    <div class="largeImage">
                        <img src="{{ asset('asset/img/Ellipse 1.png') }}" alt="largeImage">
                    </div>
                    <div class="welcomeBtn">

                        <a class="bg-[#EAE7DC] border-4 text-[#49676ebb] text-[25px] border-[#49676E] 
                                    rounded-lg py-[1.4rem] px-[3rem] shadow-[0_5px_5px_rgba(0,0,0,0.5)]"
                            href="{{ asset('/home') }}">
                            <button>WELCOME</button></a>
                    </div>
                </div>
                <div class="smallMed top-10 object-cover">
                    <div class="smallImage">
                        <img src="{{ asset('asset/img/Ellipse 3.png') }}" alt="smallImage">
                    </div>
                    <div class="mediumImage ">
                        <img src="{{ asset('asset/img/Ellipse 2.png') }}" alt="mediumImage">

                    </div>
                </div>


            </div>
        </section>
    </div>
</body>

</html>
