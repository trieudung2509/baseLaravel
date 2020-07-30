<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
        <span class="logo-lg">Quản lý Admin</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu pull-left">
            <ul class="nav navbar-nav">
            </ul>
        </div>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('admin.logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                <!-- ========== End of top menu right items ========== -->
            </ul>
        </div>
    </nav>
</header>
