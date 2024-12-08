<!DOCTYPE html>
<html lang="en">
<head>
    <title>Georgia O'Keeffe Community</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/community.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri">
</head>
<body>
    @include('include.header')

    <div class="post3">
        <h2>Sabira <img src="./assets/greencrown.png" alt="Green Crown" class="crown-icon"></h2>
        <span class="time">10m ago</span>
        <img src="./assets/comphoto.png" alt="Georgia Art" class="comm-photo">
        <p>Here's a painting that I absolutely love. Do you guys have a favorite art with a story behind it?</p>
        <div class="reply">
            <h3>Marsya <img src="./assets/silvercrown.png" alt="Silver Crown" class="crown-icon"></h3><span class="time">7m ago</span>
            <p>For me, it’s Blue #2! 
            The intense blue color suggests that she may have been familiar with Wassily Kandinsky's notion that 
            visual art, like music, should convey emotion through the use of color and line.</p>
            <img src="./assets/comphoto2.png" class="thumbnail">
            <h3>Hanna <img src="./assets/silvercrown.png" alt="Silver Crown" class="crown-icon"></h3>
            <span class="time">2m ago</span>
            <p>Wow i also love this..</p>
            </div>
        <div class="comment">
            <button class="add-comment" alt="Add Comment">Add comment</button>
            </div>
    </div>