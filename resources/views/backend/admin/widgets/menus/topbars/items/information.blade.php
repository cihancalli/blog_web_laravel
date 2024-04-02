<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle"
       href="#" id="userDropdown"
       role="button"
       data-toggle="dropdown"
       aria-haspopup="true"
       aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                     <div class="col text-center">
                             <strong>{{Auth::user()->username}}</strong>

                         </div>
                         <div class="col text-center">
                               @if(Auth::user()->userPremium == "0")
                                 <strong class="text-danger">Free User</strong>
                             @endif
                         </div>
                </span>
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
            <div class="col text-center">
                    <img class="img-profile rounded-circle"
                         src="{{Auth::user()->getRole->imageUrl}}">
                    @if(Auth::user()->userPremium == "1")
                        <img class="img-profile rounded-circle" src="{{route('home')}}/uploads/premium.png">
                    @endif
                </div>
                <div class="col text-center">
                    <strong>{{Auth::user()->getRole->nameEn}}</strong>
                </div>

         </span>
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
         aria-labelledby="userDropdown">
        <a class="dropdown-item"
           href="{{route('admin.profile')}}">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
        </a>
        <a class="dropdown-item"
           href="{{route('admin.settings')}}">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Settings
        </a>
        <a class="dropdown-item"
           href="{{route('admin.logs')}}">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
            Activity Log
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item"
           href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
        </a>
    </div>
</li>
