<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .wrapper {
            background-color: #202227;
            width: 100vw;
            height: 100vh;

        }

        .wrapper .contentWrapper {
            display: flex;
            justify-content: space-between;
            max-width: 80%;
            margin: auto;
            max-height: 80%;
        }
    </style>

</head>

<body>
    <section class="wrapper">
        <div class="contentWrapper">
            <div class="content">
                <h1>LOGO</h1>
            </div>
            <div class="image">
                <img src="{{ asset('asset/img/Frame 1 (1).png') }}" alt="image">
            </div>
        </div>
    </section>
</body>

</html>
