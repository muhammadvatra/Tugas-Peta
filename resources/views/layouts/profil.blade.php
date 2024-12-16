<li class="nav-item dropdown hidden-caret">
    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
        <div class="avatar-sm">
            <img src="../../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
        </div>
    </a>
    <ul class="dropdown-menu dropdown-user animated fadeIn">
        <li>
            <div class="user-box">
                <div class="avatar-lg"><img src="../../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                <div class="u-text">
                
                        <h4> {{ Auth::user()->name }}</h4>
                        <p class="text-muted"> {{ Auth::user()->email }}</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                    
                </div>
            </div>
        </li>
        <li>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">My Profile</a>
            <a class="dropdown-item" href="#">Account Setting</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            
            
        </li>
    </ul>
</li>