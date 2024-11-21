<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
     <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #297fb8; color: #ffffff;">
            <a href="#" class="brand-link">
                <img src="/unbaja.png" alt="Logo" class="brand-image  elevation-3">
                <span class="brand-text font-weight-light">UNBAJA</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <li class="nav-item">
                            <a href="/data-program-studi" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                            <p>
                            Data Program Studi
                            </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/data-mahasiswa" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Data Mahasiswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/data-dosen" class="nav-link">
                                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                            <p>
                            Data Dosen
                            </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid pt-3">
                    <?= $this->renderSection('content') ?>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer class="main-footer text-center">
            <strong>Copyright &copy; <?= date('Y') ?> <a href="#">Universitas Banten Jaya</a>.</strong>
            All rights reserved.
        </footer>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
     <!-- AdminLTE JS -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>
</html>
