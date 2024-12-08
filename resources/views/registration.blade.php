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
</head>
<body>
   
    @include('include.header')
    <div class="container-regist">
        <input type="checkbox" id="check">
        <div class="registration form">
            <header>Sign Up</header>
            <form action="{{route('registration.post')}}" method="POST">
                @csrf
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                <label for="password">Password</label>
                <input type="password" placeholder="Create a password" name="password" required>
                <input type="submit" class="button" value="Signup"></a>
            </form>
            <div class="signup">
                <span class="signup">Already have an account?
                <a href="{{ route('login') }}">Login</a>
                </span>
            </div>
        </div>
    </div>
</body>
</html>
