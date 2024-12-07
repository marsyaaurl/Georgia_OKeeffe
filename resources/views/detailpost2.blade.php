<!DOCTYPE html>
<html lang="en">
<head>
    <title>Georgia O'Keeffe Community</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/detailpost2.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri">
</head>
<body>
    @include('include.header')

    <div class="post2">
        <h2>Quyun <img src="./assets/bronzecrown.png" alt="Bronze Crown" class="crown-icon"></h2>
        <span class="time">5m ago</span>
        <p>I’m excited for the new exhibition! Any tips for the first timer?</p>
        <button class="comment-button"><img src="./assets/comment.png" alt="Comment" class="post-comment"></button>
        <button class="edit-button"><img src="./assets/edit.png" alt="Edit" class="edit-post"></button>
        <button class="delete-button"><img src="./assets/delete.png" alt="Delete" class="delete-post"></button>
        <div class="reply">
        <h3>Reza<img src="./assets/goldcrown.png" alt="Bronze Crown" class="crown-icon"></h3>
        <span class="time">7m ago</span>
        <p>Hello! Welcome to our community, Quyun. Here’s the pro tip:
        Arrive early to avoid crowds, and don’t forget to check out the gift shop for exclusive merch!</p>
        </div>
    </div>