<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            @if($role==$admin)
            <ul class="metismenu" id="side-menu">

                <li>
                    <a href="{{url('home')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboard </span>
                    </a>
                </li>


                
                <li>
                    <a href="{{route('logo.edit',1)}}">
                        <i class="mdi mdi-calendar-text-outline"></i>
                        <span> Event Setup</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('all-fields')}}">
                        <i class="mdi mdi-calendar-text-outline"></i>
                        <span> Input Field </span>
                    </a>
                </li>

                <li>
                    <a href="{{url('page-setup-show')}}">
                        <i class="mdi mdi-calendar-text-outline"></i>
                        <span> Page Setup </span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);">
                        <i class="mdi mdi-calendar-text-outline"></i>
                        <span> Event Data </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                      <li><a href="{{url('reguser')}}">Total Registration</a></li>
                      <li><a href="{{url('attending-users')}}">Attended Users</a></li>
                      <li><a href="{{url('not-attending-users')}}">Not Attended Users</a></li>
                      <li><a href="{{url('loginuser')}}">Live Login</a></li>
                  </ul>
              </li>

              
              <li>
                <a href="{{url('comments')}}">
                    <i class="mdi mdi-comment-multiple-outline"></i>
                    <span> Comments </span>
                </a>
            </li>
            <li>
                <a href="{{url('rating')}}">
                    <i class="mdi mdi-star-outline"></i>
                    <span> Star Rating </span>
                </a>
            </li>
            <li>
                <a href="{{url('show-like')}}">
                    <i class="mdi mdi-thumb-up-outline"></i>
                    <span> Likes </span>
                </a>
            </li>
            <li>
                <a href="{{url('footfall')}}">
                    <i class="mdi mdi-foot-print"></i>
                    <span> Footfall </span>
                </a>
            </li>

            <li>
                <li>
                    <a href="{{url('logout')}}">
                        <i class="mdi mdi-logout-variant"></i>
                        <span> Logout </span>
                    </a>
                </li>

            </ul>
            @else
            <ul class="metismenu" id="side-menu">

                <li>
                    <a href="{{url('home')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="{{url('reguser')}}">
                        <i class="mdi mdi-account-plus-outline"></i>
                        <span> Total Registration </span>
                    </a>
                </li>

                <li>
                    <a href="{{url('attending-users')}}">
                        <i class="mdi mdi-account-multiple-plus-outline"></i>
                        <span> Attended Users </span>
                    </a>
                </li>
                <li>
                 <li>
                    <a href="{{url('loginuser')}}">
                        <i class="mdi mdi-account-multiple-plus-outline"></i>
                        <span> Live Login </span>
                    </a>
                </li>
                <li>
                    <a href="{{url('comments')}}">
                        <i class="mdi mdi-comment-multiple-outline"></i>
                        <span> Comments </span>
                    </a>
                </li>
                <li>
                    <a href="{{url('rating')}}">
                        <i class="mdi mdi-star-outline"></i>
                        <span> Star Rating </span>
                    </a>
                </li>
                <li>
                    <a href="{{url('show-like')}}">
                        <i class="mdi mdi-thumb-up-outline"></i>
                        <span> Likes </span>
                    </a>
                </li>
                <li>
                    <a href="{{url('footfall')}}">
                        <i class="mdi mdi-foot-print"></i>
                        <span> Footfall </span>
                    </a>
                </li>

                <li>
                    <li>
                        <a href="{{url('logout')}}">
                            <i class="mdi mdi-logout-variant"></i>
                            <span> Logout </span>
                        </a>
                    </li>

                </ul>
                @endif

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
            <!-- Left Sidebar End -->