<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Nuha Solution <sup>V2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                CR.U.DE
            </div>

            <!-- Nav Item - User Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser">
                    <i class="fas fa-user-circle"></i>
                    <span>User</span>
                </a>
                <div id="collapseUser" class="collapse" aria-labelledby="headingUser" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">User Management:</h6>
                        <a class="collapse-item" href="tambah_user.php">Tambah User Mandiri</a>
                        <a class="collapse-item" href="data_user.php">Lihat Data User</a>
                        <a class="collapse-item" href="tambah_kelompok.php">Tambah Kelompok</a>
                        <a class="collapse-item" href="kelompok.php">Lihat Kelompok</a>
                        <a class="collapse-item" href="tambah_user_kelompok.php">Tambah User Kelompok</a>
                        <a class="collapse-item" href="data_user_kelompok.php">Lihat Data User Kelompok</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Artikel Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseArtikel" aria-expanded="true" aria-controls="collapseArtikel">
                    <i class="fas fa-newspaper"></i>
                    <span>Artikel</span>
                </a>
                <div id="collapseArtikel" class="collapse" aria-labelledby="headingArtikel" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Artikel Management:</h6>
                       
                        <a class="collapse-item" href="artikel.php">Lihat Artikel</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Hasil TEST
            </div>

            <!-- Nav Item - Test Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTest" aria-expanded="true" aria-controls="collapseTest">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Kelompok Test</span>
                </a>
                <div id="collapseTest" class="collapse" aria-labelledby="headingTest" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Mandiri:</h6>
                        <a class="collapse-item" href="test_mandiri/ist/index.php">IST</a>
                        <a class="collapse-item" href="test_mandiri/msdt/index.php">MSDT</a>
                        <a class="collapse-item" href="test_mandiri/papi/index.php">PAPI</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Kelompok:</h6>
                        <a class="collapse-item" href="test_kelompok/ist/index.php">IST</a>
                        <a class="collapse-item" href="test_kelompok/msdt/index.php">MSDT</a>
                        <a class="collapse-item" href="test_kelompok/papi/index.php">PAPI</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->