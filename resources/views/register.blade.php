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
                <form action="{{ route('registerCommand') }}" method="POST">
                    {{-- where to route to when the account is being register to the database --}}
                    @if (session()->has('message'))
                        <h1>{{ session()->get('message') }}</h1>
                    @endif

                    @csrf
                    <div id="formHeader">
                        <h3>
                            Create an Account 👋
                        </h3>
                        <p>
                            Kindly fill in your details to create an account
                        </p>
                    </div>
                    <label for="name">Your Full Name*</label>
                    <input type="text" id="name" name="full_name" placeholder="Enter your full name"
                        value="{{ old('name') }}">
                    <small style="color: red">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </small>

                    <label for="email">Email Address*</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address"
                        value="{{ old('email') }}">
                    <small style="color: red">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </small>

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
                    <label for="Confirm password">Confirm Password*</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password_confirmation"
                            placeholder="Confirm password" value="{{ old('password') }}">
                        <small style="color: red">
                            @error('password_confirmation')
                                {{ $message }}
                            @enderror
                        </small>
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
                <p class="toReg">
                    Already have an account?
                    <a href="{{ asset('register') }}">Login Here</a>
                </p>
            </div>
            <img id="bgImg" src="{{ asset('asset/img/Frame 1 (1).png') }}" alt="Your Image"
                style="border-radius: 8px;">
        </div>
        <script src="{{ asset('asset/js/script.js') }}"></script>
    </section>
</body>

</html>
