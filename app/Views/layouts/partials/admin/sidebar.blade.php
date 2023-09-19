<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="@asset('assets/admin/img/logo.png')" alt="Logo" class="brand-image img-circle elevation-3"
            style="opacity: 0.8" />
        <span class="brand-text font-weight-light">Indie Creator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="@asset('assets/admin/img/avatar.jpg')" class="img-circle elevation-2"
                    alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ $user->name ?? $user->username }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route_to('profile') }}"
                        class="nav-link {{ service('uri')->setSilent()->getSegment(3) == 'profile'? 'active': '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            {{ lang('Admin/Layout.sidebar.public_profile') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route_to('account') }}"
                        class="nav-link {{ service('uri')->setSilent()->getSegment(3) == 'account'? 'active': '' }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            {{ lang('Admin/Layout.sidebar.account') }}
                        </p>
                    </a>
                </li>
                <li class="nav-header text-uppercase">{{ lang('Admin/Layout.sidebar.content') }}</li>
                <li
                    class="nav-item {{ service('uri')->setSilent()->getSegment(3) == 'translations'? 'menu-open': '' }}">
                    <a href="#"
                        class="nav-link {{ service('uri')->setSilent()->getSegment(3) == 'translations'? 'active': '' }}">
                        <i class="nav-icon fas fa-language"></i>
                        <p>
                            {{ lang('Admin/Layout.sidebar.translations') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route_to('translations') . '/list-languages' }}"
                                class="nav-link {{ service('uri')->setSilent()->getSegment(4) == 'list-languages'? 'menu-open': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ lang('Admin/Layout.sidebar.list') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route_to('translations') . '/add-language' }}"
                                class="nav-link {{ service('uri')->setSilent()->getSegment(4) == 'add-language'? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ lang('Admin/Layout.sidebar.add') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route_to('links') }}"
                        class="nav-link {{ service('uri')->setSilent()->getSegment(3) == 'links'? 'active': '' }}">
                        <i class="nav-icon fas fa-link"></i>
                        <p>
                            {{ lang('Admin/Layout.sidebar.links') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ service('uri')->setSilent()->getSegment(3) == 'projects'? 'menu-open': '' }}">
                    <a href="#"
                        class="nav-link {{ service('uri')->setSilent()->getSegment(3) == 'projects'? 'active': '' }}">
                        <i class="nav-icon fas fa-rocket"></i>
                        <p>
                            {{ lang('Admin/Layout.sidebar.projects') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route_to('projects') . '/list-projects' }}"
                                class="nav-link {{ service('uri')->setSilent()->getSegment(4) == 'list-projects'? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ lang('Admin/Layout.sidebar.list') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route_to('projects') . '/add-project' }}"
                                class="nav-link {{ service('uri')->setSilent()->getSegment(4) == 'add-project'? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ lang('Admin/Layout.sidebar.add') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header text-uppercase">{{ lang('Admin/Layout.sidebar.access') }}</li>
                <li class="nav-item">
                    <a href="{{ route_to('logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out"></i>
                        <p>
                            {{ lang('Admin/Layout.sidebar.logout') }}
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
