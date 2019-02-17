<?php
$user = isset($_SESSION['auth']) ? $_SESSION['auth'] : null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Danh mục</title>

    <!-- Fontfaces CSS-->
    <link href="../public/adminStyle/css/font-face.css" rel="stylesheet" media="all">
    <link href="../public/adminStyle/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../public/adminStyle/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../public/adminStyle/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../public/adminStyle/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../public/adminStyle/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../public/adminStyle/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../public/adminStyle/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../public/adminStyle/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../public/adminStyle/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../public/adminStyle/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../public/adminStyle/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../public/adminStyle/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="../public/adminStyle/images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                           
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../public/adminStyle/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="<?= $baseUrl ."admin" ?>">
                                <i class="fas fa-tachometer-alt"></i>Bảng tin</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-book"></i>Chuyên mục</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?= $baseUrl ."admin/danh-muc" ?>">Tất cả chuyên mục</a>
                                </li>
                                <li>
                                    <a href="<?= $baseUrl ."admin/them-danh-muc" ?>">Thêm chuyên mục</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-box"></i>Sản phẩm</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?= $baseUrl ."admin/san-pham" ?>">Tất cả sản phẩm</a>
                                </li>
                                <li>
                                    <a href="<?= $baseUrl ."admin/them-san-pham" ?>">Thêm sản phẩm</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Tài khoản</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo $baseUrl ."admin/tai-khoan" ?>">Tất cả tài khoản</a>
                                </li>
                                <li>
                                    <a href="<?php echo $baseUrl ."admin/them-tai-khoan" ?>">Thêm tài khoản</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php if($user != null): ?>
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                   
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                            
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?= $user['name'] ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                               
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?= $user['name'] ?></a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="<?php echo $baseUrl ."admin/tai-khoan";  ?>">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo $baseUrl ."logOut"; ?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <?php endif; ?>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Danh Mục</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a href="<?= $baseUrl ."admin/them-danh-muc"; ?>"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>Thêm danh mục</button>
                                        </a>
                                    </div>
                                </div>
                                <div class=" table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <!-- <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th> -->
                                                <th>Tên danh mục</th>
                                                <th>Ngày khởi tạo</th>
                                                <th>Ngày cập nhật</th>
                                                <th>Người tạo</th>
                                                
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($category as $item): ?>
                                            <tr class="tr-shadow">
                                                <!-- <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td> -->
                                               
                                                <td class="desc">
                                                  <?= $item->cate_name; ?>
                                                </td>
                                                <td><?= $item->created_at; ?></td>
                                                <td><?= $item->updated_at; ?></td>
                                                <td>
                                                    <span class="status--process"><?php
                                                    if($item->created_by == '-1')
                                                    {
                                                        echo "Admin";
                                                    }else {
                                                        echo "Somebody";
                                                    }
                                                    ?></span>
                                                </td>
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                
                                                        <a href="<?= $baseUrl ."admin/sua-danh-muc?id=" .$item->id ?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button></a>
                                                        <a linkUrl="<?php echo $baseUrl ."admin/xoa-danh-muc?id=" .$item->id ?>" onclick="removeProduct(this)" href="javascript:;" ><button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button></a>
                                                    
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../public/adminStyle/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../public/adminStyle/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../public/adminStyle/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../public/adminStyle/vendor/slick/slick.min.js">
    </script>
    <script src="../public/adminStyle/vendor/wow/wow.min.js"></script>
    <script src="../public/adminStyle/vendor/animsition/animsition.min.js"></script>
    <script src="../public/adminStyle/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../public/adminStyle/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../public/adminStyle/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../public/adminStyle/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../public/adminStyle/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../public/adminStyle/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../public/adminStyle/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../public/adminStyle/js/main.js"></script>
    <script>
        function removeProduct(el){
            var url = el.getAttribute('linkUrl');
            var conf = confirm('Bạn chắc chắn muốn xóa sản phẩm này?');
            if(conf == true){
                window.location.href = url;
            }
        }
    </script>
</body>

</html>
<!-- end document-->
