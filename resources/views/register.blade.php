<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="{{ asset('asset/css/register.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <section>
        <div id="container">
            <div id="form-container">
                <h1 id="logo">
                    LOGO
                </h1>
                <form action="{{asset('register')}}" method="POST">
                    <div id="formHeader">
                        <h3>
                            Create an Account 👋
                        </h3>
                        <p>
                            Kindly fill in your details to create an account
                        </p>
                    </div>
                    <label for="fullName">Your Full Name*</label>
                    <input type="text" id="fullName" name="fullName" placeholder="Enter your full name">

                    <label for="email">Email Address*</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address">

                    <label for="password">Create Password*</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" placeholder="Create a password">
                        <span class="eye-icon" onclick="togglePasswordVisibility()">
                            <img src="{{ asset('asset/icons/mdi_eye.png') }}" alt="">
                        </span>
                    </div>
                    <label for="Confirm password">Confirm Password*</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password_confirmation" placeholder="Confirm password">
                        <span class="eye-icon" onclick="togglePasswordVisibility()">
                            <img src="{{ asset('asset/icons/mdi_eye.png') }}" alt="">
                        </span>
                    </div>

                    <button type="submit">Register</button>
                </form>
                <div id="hrWrapper">
                    <hr>
                    <span>Or</span>
                    <hr>
                </div>
                <button id="google-btn">
                    <img src="{{ asset('asset/icons/flat-color-icons_google.png') }}" alt="Google Logo"
                        id="google-logo">
                    Register with Google
                </button>
            </div>
            <img id="bgImg" src="{{ asset('asset/img/Frame 1 (1).png') }}" alt="Your Image"
                style="border-radius: 8px;">
        </div>
<script src="{{asset('asset/js/script.js')}}"></script>
    </section>
</body>

</html>
