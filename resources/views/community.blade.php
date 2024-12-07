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

    <div class="post1">
    <h2 class="uname">Quyun<span class="crown-icon"><img src="./assets/bronzecrown.png" alt="Bronze Crown"></span></h2>
        <p>Got a story about Georgia O’Keeffe? Let us hear it!</p>
        <button class="image-button"><img src="./assets/addimg.png" alt="Post Image" class="post-image"></button>
        <div class="post-button">
        <button class="post-button" alt="Post Comment">Post</button>
        </div>
    </div>

    <div class="post2">
        <h2 class="uname">Quyun<span class="crown-icon"><img src="./assets/bronzecrown.png" alt="Bronze Crown"></span></h2>
        <span class="time">5m ago</span>
        
        <p>I’m excited for the new exhibition! Any tips for the first timer?</p>
        <button class="comment-button"><a href="{{url('/detailpost2')}}"><img src="./assets/comment.png" alt="Comment" class="post-comment"></a></button>
        <button class="edit-button"><img src="./assets/edit.png" alt="Edit" class="edit-post"></button>
        <button class="delete-button"><img src="./assets/delete.png" alt="Delete" class="delete-post"></button>
        <div class="reply">
        <h3>Reza<img src="./assets/goldcrown.png" alt="Bronze Crown" class="crown-icon"></h3>
        <span class="time">1s ago</span>
        <p>Hello! Welcome to our community, Quyun. Here’s the pro tip:
        Arrive early to avoid crowds, and don’t forget to check out the gift shop for exclusive merch!</p>
        </div>
    </div>

    <div class="post3">
        <h2 class="uname">Sabira<span class="crown-icon"><img src="./assets/greencrown.png" alt="Green Crown"></span></h2>
        <span class="time">10m ago</span>
        <img src="./assets/comphoto.png" alt="Georgia Art" class="comm-photo">
        <p>Here's a painting that I absolutely love. Do you guys have a favorite art with a story behind it?</p>
        <button class="comment-button"><a href="{{url('/detailpost3')}}"><img src="./assets/comment.png" alt="Comment" class="post-comment"></a></button>
        <div class="reply">
            <div class="reply1">
                <h3 class="uname">Marsya<span class="reply-crown"><img src="./assets/silvercrown.png" alt="Silver Crown"></span></h3><span class="time">7m ago</span>
                <p>For me, it’s Blue #2! 
                The intense blue color suggests that she may have been familiar with Wassily Kandinsky's notion that 
                visual art, like music, should convey emotion through the use of color and line.</p>
                <img src="./assets/comphoto2.png" class="thumbnail">
            </div>
            <div class="reply2">
                <h3 class="uname">Hanna<span class="reply-crown"><img src="./assets/silvercrown.png" alt="Silver Crown"></span></h3>
                <span class="time">2m ago</span>
                <p>Wow i also love this..</p>
            </div>
        </div>
    </div>
