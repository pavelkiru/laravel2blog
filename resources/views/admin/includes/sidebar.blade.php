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
                    <a href="{{ route('admin.main') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Главная</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.posts.index') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Посты</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.category.index') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Категории</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.tags.index') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Тэги</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Пользователи</p>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
