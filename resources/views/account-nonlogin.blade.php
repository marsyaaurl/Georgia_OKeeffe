<!DOCTYPE html>
<html lang="en">
<head>
    <title>Georgia O'Keeffe</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri">
    <link rel="stylesheet" href="{{asset('css/account-nonlogin.css')}}">
    <script src="{{asset('js/account-nonlongin.js')}}" defer></script>
</head>
<body>
@include('include.header')

    <section class="account-container">
        <div class="flex-column-container">
            
            <div class="profile-container">
                <img src="./assets/profile-default3.jpg" alt="Profile Picture" class="profile-pic">
                <div class="profile-text">
                    
                    <a href="{{asset('/login')}}"><button class="login-btn">Login</button></a>
                </div>
            </div>

            <section class="membership-promo">
                <h2>Become a Member</h2>
                <div class="slideshow-container">
                    <div class="slide fade">
                        <img src="./assets/promo1.jpg" alt="Photo 1" style="width:100%;">
                    </div>
                    <div class="slide fade">
                        <img src="./assets/promo2.jpg" alt="Photo 2" style="width:100%;">
                    </div>
                    <div class="slide fade">
                        <img src="./assets/promo3.jpg" alt="Photo 3" style="width:100%;">
                    </div>
                    <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
                    <a class="next" onclick="changeSlide(1)">&#10095;</a>
                </div>
            </section>
            
            <div class="membership-info">
                <h1>Here's what's included in membership:</h1>
                <ul>
                    <li>Join our community and support the legacy of Georgia O'Keeffe.</li>
                    <li>Gain access to exclusive content and events.</li>
                    <li>Discount up to 15%.</li>
                    <li>Become part of a community dedicated to celebrating Georgia O'Keeffe.</li>
                </ul>
            </div>
        </div>

</body>
</html>
