<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://www.gravatar.com/avatar/1e22faa0f24a974c9188289c9e2a74e1.jpg?s=80&amp;d=mm&amp;r=g" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="{{ route('frontend.index') }}"><i class="fa fa-eye" aria-hidden="true"></i> Xem trang chủ</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <!-- ================================================ -->
            <!-- ==== Recommended place for admin menu items ==== -->
            <!-- ================================================ -->
            <li class="{{ Request::is('admin') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="{{ Request::is('admin/cate_post') ? 'active' : '' }}"><a href="{{ route('admin.cate_post.home') }}"><i class="fa fa-newspaper-o"></i> <span>Danh mục bài viết</span></a></li>
            <li class="{{ Request::is('admin/post') ? 'active' : '' }}"><a href="{{ route('admin.post.index') }}"><i class="fa fa-group"></i> <span>Bài viết</span></a></li>
            <li class="{{ Request::is('admin/slide') ? 'active' : '' }}"><a href="{{ route('admin.slide.index') }}"><i class="fa fa-picture-o"></i> <span>Quản lý Ảnh + Slider</span></a></li>
            <li class="{{ Request::is('admin/intro') ? 'active' : '' }}"><a href="{{ route('admin.intro.index') }}"><i class="fa fa-file-text"></i> <span>Quản lý giới thiệu</span></a></li>
            <li class="{{ Request::is('admin/administrator') ? 'active' : '' }}"><a href="{{ route('admin.administrator.home') }}"><i class="fa fa-user"></i> <span>Quản lý administrator</span></a></li>
            <li class="{{ Request::is('admin/setting') ? 'active' : '' }}"><a href="{{ route('admin.setting') }}"><i class="fa fa-cogs"></i> <span>Settings</span></a></li>
            <!-- ======================================= -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
