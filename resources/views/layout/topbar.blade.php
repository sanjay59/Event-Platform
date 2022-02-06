 <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{url('frontassets/images/user.png')}}" alt="user-image" class="rounded-circle">
                            <span class="d-none d-sm-inline-block ml-1 font-weight-medium">
                            @if($role==$admin)
                                {{$name}}
                                @else
                                {{$name}}
                                
                                @endif()
                        </span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                         

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-outline"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-settings-outline"></i>
                                <span>Settings</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="{{url('logout')}}" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="{{url('home')}}" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="{{url('frontassets/upload')}}/{{$logo->logo}}" alt="" height="55">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light ml-0">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>

                </ul>
            </div>
            <!-- end Topbar -->