<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset("/storage/mgsoficial_logo.jpeg") }}" alt="MSG Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">MSG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset("/storage/lucas.jpg") }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a class="d-block" id="username">Usuário</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-header">SITE</li>
                <a href="/cliente" class="nav-link">
                    <i class="nav-icon fa fa-user"></i>
                    <p class="text">Cliente</p>
                </a>
                <a href="/produto" class="nav-link">
                    <i class="nav-icon fa fa-archive"></i>
                    <p class="text">Produto</p>
                </a>
                <a href="/venda" class="nav-link">
                    <i class="nav-icon fa fa-shopping-cart"></i>
                    <p class="text">Venda</p>
                </a>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
