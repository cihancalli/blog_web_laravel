<!-- Nav Item - Skill Categories Collapse Menu -->
<li class="nav-item @if(Request::segment(2)=="skill-categories") active @endif">
    <a class="nav-link @if(Request::segment(2)=="skill-categories") in @else collapsed @endif" href="#" data-toggle="collapse"
       data-target="#collapseSkillCategories"
       aria-expanded="true" aria-controls="collapseSkillCategories">
        <i class="fa fa-object-group"></i>
        <span>@yield('backendMenuSkillCategoriesText','Skill Categories')</span>
    </a>
    <div id="collapseSkillCategories" class="collapse @if(Request::segment(2)=="skill-categories") show @endif"
         aria-labelledby="headingSkillCategories"
         data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">@yield('backendMenuSubTitleCustomSkillCategoriesText','Custom Skill Categories')
                :</h6>
            <a class="collapse-item @if(Request::segment(2)=="skill-categories" && Request::segment(3)=="create") active @endif"
               href="{{route('admin.skill-categories.create')}}">@yield('backendSubMenuNewCategoryText','New Skill Category')</a>
            <a class="collapse-item @if(Request::segment(2)=="skill-categories" && Request::segment(3)=="") active @endif"
               href="{{route('admin.skill-categories.index')}}">@yield('backendSubMenuAllSkillCategoriesText','All Skill Categories')</a>
        </div>
    </div>
</li>
