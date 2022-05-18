<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            @if (auth()->user() !== null)
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset(env('FOLDER_PUBLIC').'/build/images/user.png') }}" alt="">{{ auth()->user()->name }}
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="{{ url('account/profile') }}">Tài khoản của tôi</a></li>
                        <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out pull-right"></i> Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
            @endif
        </nav>
    </div>
</div>
<!-- /top navigation -->
