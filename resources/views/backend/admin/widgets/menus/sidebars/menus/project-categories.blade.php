<!-- Nav Item - Project Categories Collapse Menu -->
<li class="nav-item @if(Request::segment(2)=="project-categories") active @endif">
    <a class="nav-link @if(Request::segment(2)=="project-categories") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseProjectCategories"
       aria-expanded="true" aria-controls="collapseProjectCategories">
        <i class="fa fa-object-group"></i>
        <span>@yield('backendMenuProjectCategoriesText','ProjectCategories')</span>
    </a>
    <div id="collapseProjectCategories" class="collapse @if(Request::segment(2)=="project-categories") show @endif" aria-labelledby="headingProjectCategories"
         data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">@yield('backendMenuSubTitleCustomProjectCategoriesText','Custom Project Categories')
                :</h6>
            <a class="collapse-item @if(Request::segment(2)=="project-categories" && Request::segment(3)=="create") active @endif"
               href="{{route('admin.project-categories.create')}}">@yield('backendSubMenuNewProjectCategoryText','New Project Category')</a>
            <a class="collapse-item @if(Request::segment(2)=="project-categories" && Request::segment(3)=="") active @endif"
               href="{{route('admin.project-categories.index')}}">@yield('backendSubMenuAllProjectCategoriesText','All Project Categories')</a>
        </div>
    </div>
</li>
