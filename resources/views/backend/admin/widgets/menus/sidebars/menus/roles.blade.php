<!-- Nav Item - Roles Collapse Menu -->
<li class="nav-item @if(Request::segment(2)=="roles") active @endif">
    <a class="nav-link @if(Request::segment(2)=="roles") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseRoles"
       aria-expanded="true" aria-controls="collapseRoles">
        <i class="fa fa-handshake"></i>
        <span>@yield('backendMenuRolesText','Roles')</span>
    </a>
    <div id="collapseRoles" class="collapse @if(Request::segment(2)=="roles") show @endif" aria-labelledby="headingRoles"
         data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">@yield('backendMenuSubTitleCustomRolesText','Custom Roles')
                :</h6>
            <a class="collapse-item @if(Request::segment(2)=="roles" && Request::segment(3)=="create") active @endif"
               href="{{route('admin.roles.create')}}">@yield('backendSubMenuNewRoleText','New Role')</a>
            <a class="collapse-item @if(Request::segment(2)=="roles" && Request::segment(3)=="") active @endif"
               href="{{route('admin.roles.index')}}">@yield('backendSubMenuAllRolesText','All Roles')</a>
        </div>
    </div>
</li>
