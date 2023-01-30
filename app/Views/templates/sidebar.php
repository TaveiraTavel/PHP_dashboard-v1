<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <i class="fas fa-fire ml-4 mr-3" style="color: #cc5c1c;"></i>
        <span class="brand-text font-weight-light">CodeIgniter 4</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://media.licdn.com/dms/image/D4D03AQEky-1HG4ICjg/profile-displayphoto-shrink_200_200/0/1670967409515?e=1679529600&v=beta&t=bxDO7mniF7yhIZAixkpqdanGiaCeEmP6s9SYzB8oBlk" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a class="d-block"><?= $nomUsu ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/clientes" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Clientes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/funcionarios" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Funcionários
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/produtos" class="nav-link">
                        <i class="nav-icon fas fa-box-open"></i>
                        <p>
                            Produtos
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <hr color="#4f5962">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/usuario" class="nav-link">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>
                            Minha Conta
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>