<!-- Divider -->
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
    Resume Contents
</div>

<!-- Nav Item - Experiences Collapse Menu -->
<li class="nav-item @if(Request::segment(2)=="experiences") active @endif">
    <a class="nav-link @if(Request::segment(2)=="experiences") in @else collapsed @endif" href="#" data-toggle="collapse"
       data-target="#collapseExperiences"
       aria-expanded="true" aria-controls="collapseExperiences">
        <i class="fas fa-fw fa-edit"></i>
        <span>@yield('backendMenuExperiencesText','Experiences')</span>
    </a>
    <div id="collapseExperiences" class="collapse @if(Request::segment(2)=="experiences") show @endif"
         aria-labelledby="headingExperiences" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">@yield('backendMenuSubTitleCustomExperiencesText','Custom Experiences'):</h6>
            <a class="collapse-item @if(Request::segment(2)=="experiences" && Request::segment(3)=="create") active @endif"
               href="{{route('admin.experiences.create')}}">@yield('backendSubMenuNewExperienceText','New Experience')</a>
            <a class="collapse-item @if(Request::segment(2)=="experiences" && Request::segment(3)=="") active @endif"
               href="{{route('admin.experiences.index')}}">@yield('backendSubMenuAllExperiencesText','All Experiences')</a>
        </div>
    </div>
</li>
