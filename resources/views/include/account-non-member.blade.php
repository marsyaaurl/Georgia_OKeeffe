<section class="account-container">

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="flex-column-container">

            <div class="profile-container">
                @php
                $user = Auth::user();
                @endphp
                <img src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : 'https://t4.ftcdn.net/jpg/02/15/84/43/240_F_215844325_ttX9YiIIyeaR7Ne6EaLLjMAmy4GvPC69.jpg' }}" alt="Profile Picture" class="profile-pic">
                <div class="profile-text">
                    @if ($user)
                    <h1>{{$user->name}}</h1>
                    <p>{{$user->email}}</p>
                    @endif
                    <a href="{{route('edit.user', ['user' => $user])}}"> <button class="editprofile">Edit Profile</button></a>
                    <a href="{{route('logout')}}"> <button class="logout">Logout</button></a>
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
              <a href="{{url('/formmembership')}}"><button class="price-btn">$65 / 1 year</button></a>
          </div>
      </div>
</section>
