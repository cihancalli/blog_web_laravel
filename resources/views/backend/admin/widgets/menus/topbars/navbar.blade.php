<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    @include('backend.admin.widgets.buttons.topbar-sidebar-toggle')

    <!-- Topbar Search -->
    @include('backend.admin.widgets.forms.search')

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        @include('backend.admin.widgets.menus.topbars.items.search-dropdown')

        <!-- Nav Item - Alerts -->
        @include('backend.admin.widgets.menus.topbars.items.alerts')

        <!-- Nav Item - Messages -->
        @include('backend.admin.widgets.menus.topbars.items.messages')

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        @include('backend.admin.widgets.menus.topbars.items.information')

    </ul>
</nav>
