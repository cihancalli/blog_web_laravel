<!-- Divider -->
<hr class="sidebar-divider my-0">

<li class="nav-item @if(Request::segment(2)=="dashboard") active @endif">
    <a class="nav-link" href="{{route("admin.dashboard")}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>
