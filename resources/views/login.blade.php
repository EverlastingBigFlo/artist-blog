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
                <a href="{{ asset('/') }}">
                    <h1 id="logo">
                        LOGO
                    </h1>
                </a>
                <form action="{{ route('loginCommand') }}" method="POST">
                    {{-- where to route to when the account is being registered to the database --}}
                    @if (session()->has('message'))
                        <h1>{{ session()->get('message') }}</h1>
                    @endif

                    @csrf
                    <div id="formHeader">
                        <h3>
                            Welcome Back 👋
                        </h3>
                        <p>
                            We are happy to have you back
                        </p>
                    </div>
                    {{-- email input --}}
                    <label for="email">Email Address*</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address"
                        value="{{ old('email') }}">
                    <small style="color: red">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </small>
                    {{-- password input --}}
                    <label for="password">Create Password*</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" placeholder="Create a password"
                            value="{{ old('password') }}">
                        <small style="color: red">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </small>
                        <span class="eye-icon" onclick="togglePasswordVisibility()">
                            <img src="{{ asset('asset/icons/mdi_eye.png') }}" alt="">
                        </span>
                    </div>

                    {{-- checkbox for remembering password --}}
                    <div class="remeberPasswordChecker">
                        <div>
                            <input type="checkbox" name="remember_password" id="#rememberPassword">
                            <span>Remeber me</span>
                        </div>
                        <a href="#" class="passFor">
                            Forgot Password ?
                        </a>
                    </div>

                    <button type="submit">Login</button>
                </form>
                <div id="hrWrapper">
                    <hr>
                    <span>Or</span>
                    <hr>
                </div>
                <button id="google-btn">
                    <img src="{{ asset('asset/icons/flat-color-icons_google.png') }}" alt="Google Logo"
                        id="google-logo">
                    Login with Google
                </button>
                <p class="toReg">
                    Don’t have an account?
                    <a href="{{ asset('register') }}">Register</a>
                </p>
            </div>
            <img id="bgImg" src="{{ asset('asset/img/loginFrame.png') }}" alt="Your Image"
                style="border-radius: 8px;">
        </div>
        <script src="{{ asset('asset/js/script.js') }}"></script>
    </section>
</body>

</html>
