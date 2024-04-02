<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
    id="accordionSidebar">
    <!-- Sidebar - Brand -->
    @include('backend.admin.widgets.menus.sidebars.items.brand')
    <!-- Nav Item - Dashboard -->
    @include('backend.admin.widgets.menus.sidebars.items.dashboard')

    @if(Auth::user()->getRole->id <=3)
        <!-- Nav Item - Users -->
        @include('backend.admin.widgets.menus.sidebars.menus.users')
        <!-- Nav Item - Roles -->
        @include('backend.admin.widgets.menus.sidebars.menus.roles')
    @endif

    <!-- Nav Item - Posts -->
    @include('backend.admin.widgets.menus.sidebars.menus.posts')

    @if(Auth::user()->getRole->id <=3)
        <!-- Nav Item - Categories -->
        @include('backend.admin.widgets.menus.sidebars.menus.post-categories')
        <!-- Nav Item - Projects -->
        @include('backend.admin.widgets.menus.sidebars.menus.projects')
        <!-- Nav Item - Project Categories -->
        @include('backend.admin.widgets.menus.sidebars.menus.project-categories')
        <!-- Nav Item - Experiences -->
        @include('backend.admin.widgets.menus.sidebars.menus.experiences')
        <!-- Nav Item - Educations -->
        @include('backend.admin.widgets.menus.sidebars.menus.educations')
        <!-- Nav Item - Skills -->
        @include('backend.admin.widgets.menus.sidebars.menus.skills')
        <!-- Nav Item - Skills Categories -->
        @include('backend.admin.widgets.menus.sidebars.menus.skill-categories')
    @endif

    <!-- Sidebar Toggler (Sidebar) -->
    @include('backend.admin.widgets.buttons.sidebar-sidebar-toggle')
    @if(Auth::user()->userPremium == 0)
        <!-- Sidebar Premium Message -->
        @include('backend.admin.widgets.menus.sidebars.items.message')
    @endif
</ul>
<!-- End of Sidebar -->
