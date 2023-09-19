<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Language Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-globe"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">
                    {{ lang('Admin/Layout.navbar.choose_language') }}
                </span>
                <div class="dropdown-divider"></div>
                <a href="@relative('en/admin/profile')" class="dropdown-item">
                    <img src="@asset('assets/flags/flag.svg')" alt="english" class="img-fluid img-circle mr-1 h-1"
                        style="height: 1em" />
                    {{ lang('Admin/Layout.navbar.en') }}
                </a>
                <a href="@relative('es/admin/profile')" class="dropdown-item">
                    <img src="@asset('assets/flags/spain.svg')" alt="spanish" class="img-fluid img-circle mr-1 h-1"
                        style="height: 1em" />
                    {{ lang('Admin/Layout.navbar.es') }}
                </a>
                <a href="@relative('fr/admin/profile')" class="dropdown-item">
                    <img src="@asset('assets/flags/france.svg')" alt="french" class="img-fluid img-circle mr-1 h-1"
                        style="height: 1em" />
                    {{ lang('Admin/Layout.navbar.fr') }}
                </a>
                <a href="@relative('pt-BR/admin/profile')" class="dropdown-item">
                    <img src="@asset('assets/flags/brazil.svg')" alt="portuguese" class="img-fluid img-circle mr-1 h-1"
                        style="height: 1em" />
                    {{ lang('Admin/Layout.navbar.br') }}
                </a>
                <a href="@relative('it/admin/profile')" class="dropdown-item">
                    <img src="@asset('assets/flags/italy.svg')" alt="italian" class="img-fluid img-circle mr-1 h-1"
                        style="height: 1em" />
                    {{ lang('Admin/Layout.navbar.it') }}
                </a>
                <a href="@relative('de/admin/profile')" class="dropdown-item">
                    <img src="@asset('assets/flags/germany.svg')" alt="german" class="img-fluid img-circle mr-1 h-1"
                        style="height: 1em" />
                    {{ lang('Admin/Layout.navbar.de') }}
                </a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
