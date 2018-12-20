{{-- start col --}}
<div class="col-md-3 left_col">

    {{-- start left-col --}}
    <div class="left_col scroll-view">
        
        {{-- start navbar --}}
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('homes.index')}}" class="site_title"><span>SMART-POS</span></a>
        </div>

        <div class="clearfix"></div>

        {{-- start profile --}}
        <div class="profile clearfix">
            
            {{-- start profile_pic --}}
            <div class="profile_pic">
                <img src="{{asset('gentelellaassets/productions/images/img.jpg')}} " alt="..." class="img-circle profile_img" />
            </div>
            {{-- end profile_pic --}}
            
            {{-- start profile_info --}}
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->name}}</h2>
            </div>
            {{-- end profile_pic --}}
        
        </div>
        {{-- end profile --}}

        <br />

        {{-- start sidebar-menu --}}
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            {{-- start menu_section --}}
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li><a><span class="glyphicon glyphicon-briefcase"></span> Transactions<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="index1.html">Stuffs In (Order)</a></li>
                            <li class="{{request()->is('stuffs_out/*') ? 'current-page' : ''}}"><a href="{{route('stuffs_out.index')}}">Stuffs Out</a></li>
                        </ul>
                    </li> 

                    <li class="{{request()->path() ? 'active' : ''}}"><a><span class="glyphicon glyphicon-hdd"></span> Master Stuff<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="{{request()->path() ? 'display: block;' : 'display: none;'}}">
                            <li class="{{request()->is('stuffs/*') ? 'current-page' : ''}}"><a href="{{route('stuffs.index')}}">Stuffs</a></li>
                            <li class="{{request()->is('types_stuff/*') ? 'current-page' : ''}}"><a href="{{route('types_stuff.index')}}">Types Stuff</a></li>
                        </ul>
                    </li> 
                    
                    <li class="{{request()->path() ? 'active' : ''}}"><a><span class="glyphicon glyphicon-hdd"></span> Master Data<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="{{request()->path() ? 'display: block;' : 'display: none;'}}">
                            <li class="{{request()->is('countries/*') ? 'current-page' : ''}}"><a href="{{route('countries.index')}}">Countries</a></li>
                            <li class="{{request()->is('provinces/*') ? 'current-page' : ''}}"><a href="{{route('provinces.index')}}">Provinces</a></li>
                            <li class="{{request()->is('suppliers/*') ? 'current-page' : ''}}"><a href="{{route('suppliers.index')}}">Suppliers</a></li>
                        </ul>
                    </li>  
                </ul>
            </div>
            {{-- end menu section --}}

        </div>
        {{-- end sidebar-menu --}}

    </div>
    {{-- end left-col --}}

</div>
{{-- end col --}}