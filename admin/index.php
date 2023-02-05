<?php 
    session_start();
    if(isset($_SESSION['user'])) {

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./font/fontawesome/css/all.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="./plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="./plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="./plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="./plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="./plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="./plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="./plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="./plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./css/adminlte.min.css">

    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jQuery -->

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../" class="nav-link">Trang chủ</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <!-- Sidebar user (optional) -->
                    <div class="user-panel pb-1 d-flex" data-toggle="dropdown">
                        <div class="image">
                            <img src="img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">Admin</a>
                        </div>
                    </div>

                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-address-card mr-2"></i> Quản lý thông tin cá nhân
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-key mr-2"></i> Thay đổi mật khẩu
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="./modules/logout.php" class="dropdown-item">
                            <i class="fas fa-sign-out-alt mr-2"></i> Đăng xuất
                        </a>
                    </div>

                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php?menu" class="brand-link">
                <img src="img/AdminLTELogo.png" alt="Bookstore Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">ADMIN</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="index.php?menu" class="nav-link <?php echo ($_GET['menu'] == '') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="index.php?menu=quanlysanpham" class="nav-link <?php echo ($_GET['menu'] == 'quanlysanpham') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Quản lý sản phẩm
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="index.php?menu=quanlydanhmuc" class="nav-link <?php echo ($_GET['menu'] == 'quanlydanhmuc') ? 'active' : '' ?>">
                                <i class="nav-icon fab fa-elementor"></i>
                                <p>
                                    Quản lý danh mục
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="index.php?menu=quanlythanhvien" class="nav-link <?php echo ($_GET['menu'] == 'quanlythanhvien') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-user-circle"></i>
                                <p>
                                    Quản lý thành viên
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?menu=phanhoibaocao" class="nav-link <?php echo ($_GET['menu'] == 'phanhoibaocao') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Phản hồi báo cáo
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?menu=baocaothongke" class="nav-link <?php echo ($_GET['menu'] == 'baocaothongke') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>
                                    Báo cáo thống kê
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">


            <!-- Main content -->
            <!-- -------------------------------------------------------------------------- -->
            <?php
            if (isset($_GET['menu'])) {
                $menu = $_GET['menu'];
            } else {
                $menu = '';
            }

            if ($menu == 'quanlysanpham') {
                include("modules/product.html");
            } elseif ($menu == 'quanlydanhmuc') {
                include("modules/category.html");
            } elseif ($menu == 'quanlythanhvien') {
                include("modules/member.html");
            } elseif ($menu == 'phanhoibaocao') {
                include("modules/report.html");
            } elseif ($menu == 'baocaothongke') {
                include("modules/statistic.html");
            } else {
                include("modules/dashboard.html");
            }
            ?>
            <!-- ------------------------------------------------------------------------ -->
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- Bootstrap 4 -->
    <script src="./plugins/jquery/jquery.min.js"></script>
    <!-- Toastr -->
    <script src="./plugins/toastr/toastr.min.js"></script>
    <!-- DataTables  & Plugins -->
    <!-- AdminLTE App -->
    <script src="./plugins/chart.js/Chart.min.js"></script>
    <script src="./plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="./plugins/datatables/jquery.dataTables.js"></script>
    <script src="./plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="./plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="./plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="./plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="./js/adminlte.min.js"></script>
    <script src="./js/config.js"></script>
</body>

</html>
       <?php }else{
            header("location: http://localhost/TMDT/admin/modules/login.html");
        exit;
    }
?>