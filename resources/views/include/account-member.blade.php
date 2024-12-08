<section class="account-container">
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

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('info'))
                <div class="alert alert-info">
                    {{ session('info') }}
                </div>
            @endif

            @if(auth()->user()->is_member && auth()->user()->membership)
                <div class="membership-details">
                    <h2>Membership Details</h2>
                    <p>Membership expires on:
                        {{ auth()->user()->membership->expires_at ? \Carbon\Carbon::parse(auth()->user()->membership->expires_at)->format('d M Y') : 'N/A' }}
                    </p>
                </div>
            @else
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
            @endif
            <div class="membership-card">
                    <div style="
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        height: 50vh;">
                        <div class="card"
                            style="
                                position: relative;
                                padding: 30px;
                                width: 450px;
                                height: 240px;
                                border-radius: 15px;
                                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
                                background: linear-gradient(135deg, #004530, #ffff00);
                                color: #fff;
                                display: flex;
                                flex-direction: column;
                                justify-content: space-between;">
                            <div style="text-align: left;">
                                <h2 style="margin: 0; font-size: 1.5rem;">Membership Card</h2>
                                <p style="margin: 5px 0; font-size: 0.9rem;">Exclusive Access</p>
                            </div>
                            <div style="position: absolute; bottom: 10px; left: 10px; text-align: left;">
                                <h3 style="margin: 0 auto; margin-left: 30px;">{{$user->name}}</h3>
                                <p style="margin: 0 auto; margin-left: 30px; margin-bottom: 10px; font-size: 0.9rem;">ID: {{$user->id}}</p>
                            </div>
                            <div style="position: absolute; bottom: 10px; right: 10px; text-align: right;">
                                <h4 style="margin: 0 auto; margin-right: 30px; font-size: 1rem; color: #004530;">Expiry Date:</h4>
                                <p style="margin: 0 auto; margin-right: 30px; margin-bottom: 10px; font-size: 0.9rem; color: #004530;">
                                    {{ auth()->user()->membership->expires_at ? \Carbon\Carbon::parse(auth()->user()->membership->expires_at)->format('d M Y') : 'N/A' }}
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
    </section>
