<!-- Divider -->
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
    Blog Contents
</div>

<!-- Nav Item - Posts Collapse Menu -->
<li class="nav-item @if(Request::segment(2)=="posts") active @endif">
    <a class="nav-link @if(Request::segment(2)=="posts") in @else collapsed @endif" href="#" data-toggle="collapse"
       data-target="#collapsePosts"
       aria-expanded="true" aria-controls="collapsePosts">
        <i class="fas fa-fw fa-edit"></i>
        <span>@yield('backendMenuPostsText','Posts')</span>
    </a>
    <div id="collapsePosts" class="collapse @if(Request::segment(2)=="posts") show @endif"
         aria-labelledby="headingPosts" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">@yield('backendMenuSubTitleCustomPostsText','Custom Posts'):</h6>
            <a class="collapse-item @if(Request::segment(2)=="posts" && Request::segment(3)=="create") active @endif"
               href="{{route('admin.posts.create')}}">@yield('backendSubMenuNewPostText','New Post')</a>
            <a class="collapse-item @if(Request::segment(2)=="posts" && Request::segment(3)=="") active @endif"
               href="{{route('admin.posts.index')}}">@yield('backendSubMenuAllPostsText','All Posts')</a>
        </div>
    </div>
</li>
