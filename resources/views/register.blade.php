<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="{{asset('asset/css/register.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
</head>
<body>
   <section>
    <div id="container">
        <div id="form-container">
            <form>
                <div id="formHeader">
                    <h1>
                        Create an Account  👋
                    </h1>
                    <h6>
                        Kindly fill in your details to create an account
                    </h6>
                </div>
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName" required>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Create Password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Register</button>
            </form>
            <hr>
            <button id="google-btn">
                <img src="google-logo.png" alt="Google Logo" id="google-logo">
                Register with Google
            </button>
        </div>
        <img id="bgImg" src="{{asset('asset/img/Frame 1 (1).png')}}" alt="Your Image" style="border-radius: 8px;">
    </div>
   </section>
</body>
</html>
