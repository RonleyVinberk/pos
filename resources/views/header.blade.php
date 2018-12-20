{{-- start top-nav --}}
<div class="top_nav">

    {{-- start nav_menu --}}
    <div class="nav_menu">
        <nav>
            {{-- start nav toggle --}}
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            {{-- end nav toggle --}}

            {{-- start nav --}}
            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('gentelellaassets/productions/images/img.jpg')}}" alt="">{{Auth::user()->name}}
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="javascript:;"> Profile</a></li>
                        <li>
                            <a href="javascript:;">
                                <span class="badge bg-red pull-right">50%</span>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li><a href="javascript:;">Help</a></li>
                        <li>
                            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                
            </ul>
            {{-- end nav --}}
        </nav>

    </div>
    {{-- end nav_menu --}}

</div>
{{-- end top-nav --}}