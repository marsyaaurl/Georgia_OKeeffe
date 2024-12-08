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

    @auth
        <div class="post1">
        <h2 class="uname">Post Your Story</h2>
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <div class="input-text">
                <input type="text" name="user_name" value="{{ Auth::user()->name }}" readonly>
                <textarea name="reply" placeholder="Got a story about Georgia O’Keeffe? Let us hear it!" required></textarea>
            </div>
            <div class="post-button">
                <button type="submit" class="post-button" alt="Post Comment">Post</button>
            </div>
        </form>
    </div>
    @endauth



    @foreach ($comments as $comment)
    <div class="post2">
        <h2 class="uname">{{ $comment->user_name }}</h2>
        <span class="time">{{ $comment->created_at->diffForHumans() }}</span>
        <p>{{ $comment->reply }}</p>
        <div class="buttons">
            <!-- Tombol Edit -->
            <button class="edit-button">
                <a href="#" onclick="event.preventDefault(); document.getElementById('edit-form-{{ $comment->id }}').style.display = 'block';">
                    <img src="./assets/edit.png" alt="Edit" class="edit-post">
                </a>
            </button>

            <!-- Tombol Delete -->
            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button">
                    <img src="./assets/delete.png" alt="Delete" class="delete-post">
                </button>
            </form>
        </div>

        <!-- Form Edit -->
        <div id="edit-form-{{ $comment->id }}" style="display:none;">
            <form action="{{ route('comments.update', $comment->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="input-text">
                    <input type="text" name="user_name" value="{{ $comment->user_name }}" required>
                    <textarea name="reply" required>{{ $comment->reply }}</textarea>
                </div>
                <button type="submit" class="post-button">Update</button>
            </form>
        </div>
    </div>
    @endforeach
</body>
</html>
