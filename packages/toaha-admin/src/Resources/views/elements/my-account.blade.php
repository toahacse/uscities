<div class="sidebar-user-material mb-2">
    <div class="sidebar-user-material-body">
        <div class="center-content d-flex justify-content-center align-items-center">
            <img class="img-circle elevation-2" height="80px" width="80px" src="{{ asset('') }}{{$myaccount_pic}}" alt="Card image">
        </div>
        <div class="sidebar-user-material-footer">
            <a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle collapsed" data-toggle="collapse" aria-expanded="false"><span>{{__('My Account')}}</span></a>
        </div>
    </div>

    <div class="collapse" id="user-nav" style="">
        <ul class="nav nav-sidebar">
           
        @foreach ($myaccount_navItems as $navItem)        
            <li class="nav-item">
                <a href="{{$navItem['route']}}" class="nav-link">
                    <i class="{{$navItem['icon']}}"></i>
                    <span>{{$navItem['label']}}</span>
                </a>
            </li>
        @endforeach
        <li class="nav-item">
        
        <form method="POST" action="{{ Route::has('logout') ? route('logout') : "#" }}">
            @csrf

            <a href="route('logout')" class="nav-link"
            onclick="event.preventDefault();
                                this.closest('form').submit();"
            >
                <i class="fas fa-sign-out-alt"></i>
                <span>{{ __('Log out') }}</span>
            </a>
        </form>
        </li>        
        </ul>
    </div>
</div>
