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
    <style>
        * {
            font-family: 'Cormorant Garamond', serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .welcomePage{
            max-width: 100vw;
            height: 100vh;
            display: flex;
            margin: auto;
          
        }

       .welcomePage header .navBg {
            max-heightht: 101px;
        }

        .welcomePage header .navBg .logo a {
            text-decoration: none;
            font-size: 50px;
            color: #49676E;
            padding-left: 7rem;
            padding-top: 5rem;
            transform: translateY(5rem);
        }

        .welcomePage header .navBg .logo a:hover {
            color: black;
        }

        .welcomePage .heroSection{
            position: relative;
            max-width:10rem;
            max-height: 100%;
        }
        .welcomePage .heroSection .largeImage{
            position: absolute;
            transform: translateY(11rem);
        }
        .welcomePage .heroSection .mediumImage{
            position: absolute;
            left: 27rem;
            top: 25rem;
        }
        .welcomePage .heroSection .smallImage{
            position: absolute;
            left: 23rem;
            top: 4rem;
        }
    </style>
</head>

<body>
    <div class="welcomePage">
        {{-- nav --}}
        <header>
            <div class="navBg">
                <div class="logo"><a href="#">LOGO</a></div>
            </div>
        </header>
    
        {{-- heroSection --}}

        <section>
            <div class="heroSection">
                <div class="largeImage">
                    <img src="{{asset('img/Ellipse 1.png')}}" alt="largeImage">
                </div>
                <div class="smallImage">
                    <img src="{{asset('img/Ellipse 3.png')}}" alt="smallImage">
                </div>
                <div class="mediumImage">
                    <img src="{{asset('img/Ellipse 2.png')}}" alt="mediumImage">

                </div>
            </div>
            </section>
    </div>
</body>

</html>
