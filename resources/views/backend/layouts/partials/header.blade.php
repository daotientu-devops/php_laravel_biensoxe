<div class="navbar nav_title" style="border: 0;">
    <a href="{{ url('/') }}" class="site_title"><span>VRP&#183;Dashboard</span></a>
</div>
<div class="clearfix"></div>
<!-- menu profile quick info -->
<div class="profile clearfix">
    <div class="profile_pic">
        <img src="{{ asset(env('FOLDER_PUBLIC').'/backend/build/images/user.png') }}" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
        @if (auth()->user() !== null)
            <span>Chào mừng,</span>
            <h2>{{ auth()->user()->name }}</h2>
        @endif
    </div>
</div>
<!-- /menu profile quick info -->
<br />
