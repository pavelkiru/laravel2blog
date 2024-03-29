<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.main') }}" class="brand-link">
        <img src="{{ asset('admin_style_js/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Blog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('personal.main.index') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Главная</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('personal.comments.index') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Комментарии</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('personal.likes.index') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Лайки</p>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
