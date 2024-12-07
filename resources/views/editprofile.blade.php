<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/editprofile.css')}}" />
  </head>
  <body>
    <div class="edit-profile">
      <h1>Edit Profile</h1>

      <div class="form-editprofile">
        <img
          src="https://t4.ftcdn.net/jpg/02/15/84/43/240_F_215844325_ttX9YiIIyeaR7Ne6EaLLjMAmy4GvPC69.jpg"
          class="ipicture"
        />
        <form action="" method="POST">
          <div class="profile-picture">
            <label for="photo-upload" class="upload-label">Upload Photo</label>
            <input
              type="file"
              name="input-picture"
              class="input-picture"
              accept="image/*"
            />
          </div>

          <div class="input-group">
            <label for="name">Name</label>
            <input type="name" id="name" class="name" value="" />
          </div>

          <div class="input-group">
            <label for="email">Email</label>
            <input type="email" class="email" value="" />
          </div>

          <div class="input-group">
            <label for="password">New Password</label>
            <input type="password" class="password" />
          </div>

          <div class="input-group">
            <label for="confirm-password">Confirm New Password</label>
            <input type="password" class="confirm-password" />
          </div>
          <button type="submit" class="save-profile">Save Profile</button>
        </form>
      </div>
    </div>
  </body>
</html>