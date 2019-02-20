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
    <title>Thêm sản phẩm</title>

    <!-- Fontfaces CSS-->
    <link href="../public/adminStyle/css/font-face.css" rel="stylesheet" media="all">
    <link href="../public/adminStyle/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../public/adminStyle/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../public/adminStyle/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../public/adminStyle/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- public/adminStyle/vendor CSS-->
    <link href="../public/adminStyle/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../public/adminStyle/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../public/adminStyle/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../public/adminStyle/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../public/adminStyle/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../public/adminStyle/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../public/adminStyle/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <script src="//cdn.ckeditor.com/4.11.2/basic/ckeditor.js"></script>
    <!-- Main CSS-->
    <link href="../public/adminStyle/css/theme.css" rel="stylesheet" media="all">
    <style>
        #boxCheckBox input{
            margin:5px;
        }
        #boxCheckBox2 input{
            margin:5px;
        }
        #numberChoose{
            border-radius:2px;
            padding:.375rem .75rem;
            font-size:1rem;
            line-height:1.5;
            color:#495057;
            background:#fff;
            border:1px solid #ced4da!important;
        }
        #nameColor{
            border-radius:2px;
            padding:.375rem .75rem;
            font-size:1rem;
            line-height:1.5;
            color:#495057;
            background:#fff;
            border:1px solid #ced4da!important;
        }
        .error{
            color:red;
        }
    </style>
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
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="card">
                                    <div class="card-header">
                                        <strong>THÊM</strong> SẢN PHẨM
                                    </div>
            <!-- FORM ADD PRODUCT -->
                                    <form id="addProductForm" action="<?= $baseUrl ."addProduct" ?>" enctype="multipart/form-data" method="post" class="" novalidate>
                                    <div class="card-body card-block">
                                            <div class="form-group">
                                                <label class=" form-control-label">Tên sản phẩm :</label>
                                                <input onchange="validate()" type="text" id="inputName" name="name" class="form-control" placeholder="Nhập tên sản phẩm">
                                                <br>
                                                <br>
                                                <label for="name" generated="true"  class="error"></label>
                                                <label class=" form-control-label">Ảnh sản phẩm :</label>
                                                <br>
                                                <input onchange="readUrl(this)" type="file" name="image">
                                                <br>
                                                <br>
                                                <img src="" width="250" id="blah" >
                                                <br>
                                                <br>
                                                <label for="image" generated="true"  class="error"></label>
                                                <br>
                                                <label class=" form-control-label">Danh mục sản phẩm :</label>
                                                <select name="cate_id" class="form-control">
                                                    <?php foreach($category as $item): ?>
                                                    <option value="<?= $item->id ?>"><?= $item->cate_name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <br>
                                                <label class=" form-control-label">Kích cỡ sản phẩm :</label>
                                                <div id="boxCheckBox">
                                                
                                                <span>39</span> <input class="inputCheckbox"  type="checkbox" name="size[]" value="39">
                                                <span>40</span> <input class="inputCheckbox"  type="checkbox" name="size[]" value="40">
                                                <span>41</span> <input class="inputCheckbox"  type="checkbox" name="size[]" value="41">        
                                                <input class="inputCheckbox" type="checkbox"  style="display:none;">
                                                <br>
                                                <input type="text" id="numberChoose" placeholder="Thêm tùy chọn kích cỡ" style="border:1px solid gray">
                                               
                                                <button id="buttonCheckBoxSize" onclick="addSizeNumberCheckBox()" type="button">Thêm kích cỡ</button>
                                                
                                                </div>
                                                <label for="size[]" id="size[]-error" class="error"></label>
                                                <br>
                                                <label class=" form-control-label">Màu sản phẩm : </label>
                                                <div id="boxCheckBox2" >
                                                
                                                <span>Đỏ</span> <input class="inputCheckbox2" type="checkbox" name="color[]" value="Đỏ">
                                                <span>Đen</span>  <input class="inputCheckbox2" type="checkbox" name="color[]" value="Đen">
                                                <span>Trắng</span>  <input class="inputCheckbox2" type="checkbox" name="color[]" value="Trắng">
                                                <input class="inputCheckbox2" type="checkbox" name="color[]" style="display:none;">
                                                <br>
                                                <input type="text" id="nameColor" style="border:1px solid gray">
                                                <button onclick="addColorCheckBox()" type="button">Thêm loại màu : </button>
                                                </div>
                                                <label for="color[]" id="color[]-error" class="error"></label>
                                                <br>
                                                <label class=" form-control-label">Giá sản phẩm : </label>
                                                <input type="number" name="price" class="form-control">
                                                <br>
                                                <label class=" form-control-label">Mô tả ngắn : </label>
                                                <textarea name="short_desc" class="form-control" style="height:200px;"></textarea>
                                                <br>
                                                <label for="short_desc" generated="true"  class="error"></label>
                                                <br>
                                                <br>
                                                <label class=" form-control-label">Chi tiết sản phẩm : </label>
                                                <textarea name="detail" class="form-control" style="height:200px;"></textarea>
                                                <label for="detail" generated="true"  class="error"></label>
                                                <br>
                                                <br>
                                                <input type="hidden" name="created_at" value="<?= date("Y-m-d"); ?>">
                                                <label for="">Trạng thái : </label>
                                                <br>
                                                <select name="status" class="form-control">
                                                    <option value="0">Bản nháp</option>
                                                    <option value="1">Đang hoạt động</option>
                                                </select>
                                                </div>
                                            
                                    </div>
                                    
                                    <div class="card-footer">
                                        <button onclick="validate()" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Thêm sản phẩm
                                        </button>
                                        
                                    </div>
                                </div>
                                </form>
                    <!-- END FORM ADD PRODUCT -->
                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                
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
    <!-- vendor JS       -->
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
    <!-- Render Image -->
    <script src="../public/adminStyle/js/byMe.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <script>
	 $.validator.addMethod(
            "regex",
            function(value, element, regexp) 
            {
                if (regexp.constructor != RegExp)
                    regexp = new RegExp(regexp);
                else if (regexp.global)
                    regexp.lastIndex = 0;
                return this.optional(element) || regexp.test(value);
            },
            "Please check your input."
    );
		$(document).ready(function(){
            $('#addProductForm').validate({
                ignore: [],
                rules: {
                    name:{
                        required: true,
                    },
                    image:{
                        required: true,
                    },
                    price:{
                        required: true,
                        regex: /^[0-9]+$/,
                    },
                    short_desc:{
                        required: true,
                    },
                    detail:{
                        required: true,
                    },
                    'size[]':{
                        required: true,
                    },
                    'color[]':{
                        required: true,
                    }
                },
                messages:{
                    name: {
                        required: "* Vui lòng nhập tên sản phẩm",
                    },
                    image:{
                        required: "* Vui lòng chọn ảnh sản phẩm",
                    },
                    price:{
                        required: "* Vui lòng nhập giá sản phẩm",
                        regex: "* Giá sản phẩm không hợp lệ",
                    },
                    short_desc:{
                        required: "* Vui lòng nhập mô tả sản phẩm",
                    },
                    detail:{
                        required: "* Vui lòng nhập chi tiết sản phẩm",
                    },
                    'size[]':{
                        required: "* Vui lòng chọn kích cỡ sản phẩm",
                    },
                    'color[]':{
                        required: "* Vui lòng chọn màu sản phẩm",
                    }
                }
            });
        })
	</script>

</body>

</html>
<!-- end document-->
