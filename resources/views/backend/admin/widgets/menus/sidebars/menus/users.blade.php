<!-- Divider -->
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
    User Settings
</div>
<!-- Nav Item - Users Collapse Menu -->
<li class="nav-item @if(Request::segment(2)=="users") active @endif">
    <a class="nav-link @if(Request::segment(2)=="users") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseUsers"
       aria-expanded="true" aria-controls="collapseUsers">
        <i class="fa fa-user"></i>
        <span>@yield('backendMenuUsersText','Users')</span>
    </a>
    <div id="collapseUsers" class="collapse @if(Request::segment(2)=="users") show @endif" aria-labelledby="headingUsers"
         data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">@yield('backendMenuSubTitleCustomUsersText','Custom Users')
                :</h6>
            <a class="collapse-item @if(Request::segment(2)=="users" && Request::segment(3)=="create") active @endif"
               href="{{route('admin.users.create')}}">@yield('backendSubMenuNewUserText','New User')</a>
            <a class="collapse-item @if(Request::segment(2)=="users" && Request::segment(3)=="") active @endif"
               href="{{route('admin.users.index')}}">@yield('backendSubMenuAllUsersText','All Users')</a>
        </div>
    </div>
</li>
