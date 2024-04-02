<!-- Nav Item - Educations Collapse Menu -->
<li class="nav-item @if(Request::segment(2)=="educations") active @endif">
    <a class="nav-link @if(Request::segment(2)=="educations") in @else collapsed @endif" href="#" data-toggle="collapse"
       data-target="#collapseEducations"
       aria-expanded="true" aria-controls="collapseEducations">
        <i class="fas fa-fw fa-edit"></i>
        <span>@yield('backendMenuEducationsText','Educations')</span>
    </a>
    <div id="collapseEducations" class="collapse @if(Request::segment(2)=="educations") show @endif"
         aria-labelledby="headingEducations" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">@yield('backendMenuSubTitleCustomEducationsText','Custom Educations'):</h6>
            <a class="collapse-item @if(Request::segment(2)=="educations" && Request::segment(3)=="create") active @endif"
               href="{{route('admin.educations.create')}}">@yield('backendSubMenuNewEducationText','New Education')</a>
            <a class="collapse-item @if(Request::segment(2)=="educations" && Request::segment(3)=="") active @endif"
               href="{{route('admin.educations.index')}}">@yield('backendSubMenuAllEducationsText','All Educations')</a>
        </div>
    </div>
</li>
