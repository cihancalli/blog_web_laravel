<!-- Nav Item - Skills Collapse Menu -->
<li class="nav-item @if(Request::segment(2)=="skills") active @endif">
    <a class="nav-link @if(Request::segment(2)=="skills") in @else collapsed @endif" href="#" data-toggle="collapse"
       data-target="#collapseSkills"
       aria-expanded="true" aria-controls="collapseSkills">
        <i class="fas fa-fw fa-edit"></i>
        <span>@yield('backendMenuSkillsText','Skills')</span>
    </a>
    <div id="collapseSkills" class="collapse @if(Request::segment(2)=="skills") show @endif"
         aria-labelledby="headingSkills" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">@yield('backendMenuSubTitleCustomSkillsText','Custom Skills'):</h6>
            <a class="collapse-item @if(Request::segment(2)=="skills" && Request::segment(3)=="create") active @endif"
               href="{{route('admin.skills.create')}}">@yield('backendSubMenuNewSkillText','New Skill')</a>
            <a class="collapse-item @if(Request::segment(2)=="skills" && Request::segment(3)=="") active @endif"
               href="{{route('admin.skills.index')}}">@yield('backendSubMenuAllSkillsText','All Skills')</a>
        </div>
    </div>
</li>
