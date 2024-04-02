<!-- Nav Item - Categories Collapse Menu -->
<li class="nav-item @if(Request::segment(2)=="categories") active @endif">
    <a class="nav-link @if(Request::segment(2)=="categories") in @else collapsed @endif" href="#" data-toggle="collapse"
       data-target="#collapseCategories"
       aria-expanded="true" aria-controls="collapseCategories">
        <i class="fa fa-object-group"></i>
        <span>@yield('backendMenuCategoriesText','Categories')</span>
    </a>
    <div id="collapseCategories" class="collapse @if(Request::segment(2)=="categories") show @endif"
         aria-labelledby="headingCategories"
         data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">@yield('backendMenuSubTitleCustomCategoriesText','Custom Categories')
                :</h6>
            <a class="collapse-item @if(Request::segment(2)=="categories" && Request::segment(3)=="create") active @endif"
               href="{{route('admin.categories.create')}}">@yield('backendSubMenuNewCategoryText','New Category')</a>
            <a class="collapse-item @if(Request::segment(2)=="categories" && Request::segment(3)=="") active @endif"
               href="{{route('admin.categories.index')}}">@yield('backendSubMenuAllCategoriesText','All Categories')</a>
        </div>
    </div>
</li>
