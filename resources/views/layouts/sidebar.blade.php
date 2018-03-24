

<div class="col-md-3">
    <div id="sidebar" class="sidebar sidebar-default open" role="navigation">
         <ul class="nav sidebar-nav">
            <li>
                <a href="{{route('profile')}}">
                    <i class="sidebar-icon fa fa-user-circle"></i>
                    Profile
                </a>
            </li>
            
            <li class="dropdown">
                <a href="{{route('account.post', Auth::user()->idx)}}">
                    <i class="sidebar-icon fa fa-list"></i>
                    Post
                </a>
            </li>
            <li>
                <a href="{{ route('profile.setting', Auth::user()->idx) }}">
                    <i class="sidebar-icon fa fa-gear"></i>
                       Setting
                </a>
            </li>
            <li>
                <a href="{{route('account')}}">
                    <i class="sidebar-icon fa fa-user"></i>
                       Account
                </a>
            </li>
        </ul>
    </div>
</div>