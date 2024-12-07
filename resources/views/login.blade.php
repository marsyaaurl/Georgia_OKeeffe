<!DOCTYPE html>
<html lang="en">
<head>
    <title>Georgia O'Keeffe Exhibitions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri">
    <script src="{{ asset('js/login.js') }}" defer></script>
</head>
<body>
@include('include.header')
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <header>Login</header>
            <form action="{{route('login.post')}}" method="POST">
                @csrf
                <input type="email" placeholder="Enter your email" name="email">
                <input type="password" placeholder="Enter your password" name="password">
                <a href="#">Forgot password?</a>
                <input type="submit" class="button" value="Login">
            </form>
            <div class="signup">
                <span class="signup">Don't have an account?
                <a href="{{ route('registration') }}">Sign up</a>
                </span>
            </div>
        </div>
    </div>
</body>
</html>
