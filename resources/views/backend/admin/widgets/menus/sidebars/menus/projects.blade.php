<!-- Divider -->
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
    Project Contents
</div>

<!-- Nav Item - Projects Collapse Menu -->
<li class="nav-item @if(Request::segment(2)=="projects") active @endif">
    <a class="nav-link @if(Request::segment(2)=="projects") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseProjects"
       aria-expanded="true" aria-controls="collapseProjects">
        <i class="fas fa-fw fa-edit"></i>
        <span>@yield('backendMenuProjectsText','Projects')</span>
    </a>
    <div id="collapseProjects" class="collapse @if(Request::segment(2)=="projects") show @endif" aria-labelledby="headingProjects" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">@yield('backendMenuSubTitleCustomProjectsText','Custom Projects'):</h6>
            <a class="collapse-item @if(Request::segment(2)=="projects" && Request::segment(3)=="create") active @endif"
               href="{{route('admin.projects.create')}}">@yield('backendSubMenuNewProjectText','New Project')</a>
            <a class="collapse-item @if(Request::segment(2)=="projects" && Request::segment(3)=="") active @endif"
               href="{{route('admin.projects.index')}}">@yield('backendSubMenuAllProjectsText','All Projects')</a>
        </div>
    </div>
</li>


