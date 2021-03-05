 <!-- menu -->
 <div class="page-menu">

    <!-- logo -->
    <div class="logo uk-visible@s">
        <a> <span> Learning Post</span> </a>
    </div>
    <div class="page-menu-inner" data-simplebar>
        <ul class="mt-0">
            <li><a href="{{ route('dashboard') }}"><i class="uil-home-alt"></i> <span> Dashboard</span></a> </li>
            <li><a href="{{ route('course') }}"><i class="uil-youtube-alt"></i> <span> Courses</span></a> </li>
            <li><a href="{{ route('employee') }}"><i class="uil-users-alt"></i> <span> Employee</span></a> </li>
            <li><a href="{{ route('instructure') }}"><i class="uil-graduation-hat"></i> <span> Instructers</span></a></li>
            <li><a href="{{ route('category') }}"><i class="uil-tag-alt"></i> <span> Catagories</span></a> </li>
        </ul>

<ul data-submenu-title="Setting">
    <li><a href="setting.html"><i class="uil-edit-alt"></i> <span> Edit Profil </span></a> </li>
    
    <li><a href="login.html"><i class="uil-sign-out-alt"></i> <span> Sign-out</span></a> </li>
</ul>

    </div>
</div>

<!-- Header Container
================================================== -->
<header class="header uk-light">
    
    <div class="container">
        <nav uk-navbar>

            <!-- left Side Content -->
            <div class="uk-navbar-left">

                <!-- menu icon -->
                <span class="mmenu-trigger" uk-toggle="target: #wrapper ; cls: mobile-active">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </span>


                <!-- logo -->
                <a href="dashboard.html" class="logo">
                    <img src="../assets/images/logo-dark.svg" alt="">
                    <span> Leapost</span>
                </a>

                <div class="searchbox uk-visible@s">

                    <input class="uk-search-input" type="search" placeholder="Search...">
                    <button class="btn-searchbox"> </button>

                </div>
                <!-- Search box dropdown -->
                <div uk-dropdown="pos: top;mode:click;animation: uk-animation-slide-bottom-small"
                    class="dropdown-search">
                    <div class="erh BR9 MIw"
                        style="top: -26px;position: absolute ; left: 24px;fill: currentColor;height: 24px;pointer-events: none;color: #f5f5f5;">
                        <svg width="22" height="22">
                            <path d="M0 24 L12 12 L24 24"></path>
                        </svg></div>
                    <!-- User menu -->

                    <ul class="dropdown-search-list">
                        <li class="list-title">
                            Recent Searches
                        </li>
                        <li>
                            <a href="course-intro.html">
                                Ultimate Web Designer And Developer Course</a>
                        </li>
                        <li><a href="course-intro.html">
                                The Complete Ruby on Rails Developer Course </a>
                        </li>
                        <li><a href="course-intro.html">
                                Bootstrap 4 From Scratch With 5 Real Projects </a>
                        </li>
                        <li> <a href="course-intro.html">
                                The Complete 2020 Web Development Bootcamp </a>
                        </li>
                        <li class="menu-divider">
                        <li><a href="course-intro.html">
                                Bootstrap 4 From Scratch With 5 Real Projects </a>
                        </li>
                        <li> <a href="course-intro.html">
                                The Complete 2020 Web Development Bootcamp </a>
                        </li>
                    </ul>

                </div>
            </div>


            <!--  Right Side Content   -->

            <div class="uk-navbar-right">



                <div class="header-widget">
                    <!-- profile-icon-->
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-avatar">
                            <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                        </div>
                        <div class="dropdown-user-name">
                            Raditya <span>Adminstrator</span>
                        </div>
                    </div>
                    <div uk-dropdown="pos: top-right ;mode:click" class="dropdown-notifications small">

                        <!-- User menu -->

                        <ul class="dropdown-user-menu">
                            <li>
                                <a href="#">
                                    <i class="icon-material-outline-dashboard"></i> Dashboard</a>
                            </li>
                            
                            <li><a href="profile-edit.html">
                                    <i class="icon-feather-settings"></i> Account Settings</a>
                            </li>
                            
                            <ul class="menu-divider">
                                <li><a href="#">
                                        <i class="icon-feather-help-circle"></i> Help</a>
                                </li>
                                <li><a href="page-login.html">
                                        <i class="icon-feather-log-out"></i> Sing Out</a>
                                </li>
                            </ul>


                    </div>


                </div>



                <!-- icon search-->
                <a class="uk-navbar-toggle uk-hidden@s"
                    uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#">
                    <i class="uil-search icon-small"></i>
                </a>
                <!-- User icons -->
                <span class="uil-user icon-small uk-hidden@s"
                    uk-toggle="target: .header-widget ; cls: is-active">
                    </spanc>

            </div>
            <!-- End Right Side Content / End -->


        </nav>

    </div>
    <!-- container  / End -->

    
</header>