<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profile</title>
    <link rel="stylesheet" href="{{ asset('css/editprofile.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri">
  </head>
  <body>
    @include('include.header')
    <div class="edit-profile">
      <h1>Edit Profile</h1>

        <div class="form-editprofile">
            <form action="{{ route('update.user', ['user' => $user]) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('put')
          <img
            src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : 'https://t4.ftcdn.net/jpg/02/15/84/43/240_F_215844325_ttX9YiIIyeaR7Ne6EaLLjMAmy4GvPC69.jpg' }}"
            class="ipicture"
          />
          <div class="profile-picture">
            <label for="photo-upload" class="upload-label">Upload Photo</label>
            <input
              type="file"
              name="input_picture"
              class="input-picture"
              accept="image/*"
            />
          </div>

          <div class="input-group">
            <label for="name">Name</label>
            <input type="text" id="name" class="name" value="{{ $user->name }}" name="name" />
          </div>

          <div class="input-group">
            <label for="email">Email</label>
            <input type="email" class="email" value="{{ $user->email }}" name="email" />
          </div>

          <button type="submit" class="save-profile">Save Profile</button>
        </form>
      </div>

      <div class="form-editprofile">
      <form action="{{ route('update.password', ['user' => $user]) }}" method="POST">
        @csrf
        @method('put')
        <div class="input-group">
            <label for="current-password">Current Password</label>
            <input type="password" id="password" name="password" class="password" required />
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-group">
            <label for="new-password">New Password</label>
            <input type="password" id="new-password" name="new_password" class="password" required />
            @error('new_password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-group">
            <label for="confirm-new-password">Confirm New Password</label>
            <input type="password" id="confirm-new-password" name="new_password_confirmation" class="password" required />
        </div>

        <button type="submit" class="save-profile">Change Password</button>
        </form>
    </div>
  </body>
</html>
