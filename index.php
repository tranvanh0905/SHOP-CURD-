<?php
session_start();
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
$baseUrl = "http://localhost/web3013/";
require_once "./controllers/HomeController.php";
require_once "./controllers/ProductController.php";
require_once "./controllers/UserController.php";
require_once "./controllers/CategoryController.php";
switch($url){
    case "/":
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    case "san-pham":
        $ctr = new ProductController();
        echo $ctr->productPage();
        break;
    case "dang-nhap-tai-khoan":
        $ctr = new UserController();
        echo $ctr->User();
        break;
    case "login":
        $ctr = new HomeController();
        echo $ctr->loginStatus();
        break;
    case "logOut":
        unset($_SESSION['auth']);
        header("location:./");
        die;
        break;
    case "dang-ky-tai-khoan":
        $ctr = new UserController();
        echo $ctr->register();
        break;
    case "add-User":
        $ctr = new UserController();
        echo $ctr->addUser();
        break;
    case "checkEmail":
        $ctr = new UserController();
        echo $ctr->checkEmail();
        break;
    case "checkUser":
        $ctr = new UserController();
        echo $ctr->checkUser();
        break;
    case "update-user":
        $ctr = new UserController();
        echo $ctr->updateUser();
        break;
    case "remove":
        $ctr = new ProductController();
        echo $ctr->remove();
        break;
    case "removeCheckbox":
        $ctr = new ProductController();
        echo $ctr->removeProductCheckbox();
        break;
    case "admin":
        $ctr = new HomeController();
        echo $ctr->checkAuth()->admin();
        break;
    case "admin/danh-muc":
        $ctr = new CategoryController();
        echo $ctr->checkAuth()->categoryAdminPage();
        break;
    case "admin/them-danh-muc":
        $ctr = new CategoryController();
        echo $ctr->checkAuth()->addCategoryPage();
        break;
    case "admin/sua-danh-muc":
        $ctr = new CategoryController();
        echo $ctr->checkAuth()->editCategoryPage();
        break;
    case "addCategory":
        $ctr = new CategoryController();
        echo $ctr->addCategory();
        break;
    case "updateCategory":
        $ctr = new CategoryController();
        echo $ctr->updateCategory();
        break;
    case "admin/xoa-danh-muc":
        $ctr = new CategoryController();
        echo $ctr->checkAuth()->remove();
    break;
    case "admin/san-pham":
        $ctr = new ProductController();
        echo $ctr->checkAuth()->productAdmin();
        break;
    case "admin/them-san-pham":
        $ctr = new ProductController();
        echo $ctr->checkAuth()->productAddPage();
        break;
    case "admin/sua-san-pham":
        $ctr = new ProductController();
        echo $ctr->checkAuth()->productUpdatePage();
        break;
    case "addProduct":
        $ctr = new ProductController();
        echo $ctr->addProduct();
        break;
    case "updateProduct":
        $ctr = new ProductController();
        echo $ctr->updateProduct();
        break;
    case "admin/tai-khoan":
        $ctr = new UserController();
        echo $ctr->checkAuth()->pageUser();
        break;
    case "admin/them-tai-khoan":
        $ctr = new UserController();
        echo $ctr->checkAuth()->pageAdd();
        break;
    case "removeUser":
        $ctr = new UserController();
        echo $ctr->remove();
        break;
    case "admin/sua-tai-khoan":
        $ctr = new UserController();
        echo $ctr->checkAuth()->updateUserPage();
        break;
    case "addUserAdmin":
        $ctr = new UserController();
        echo $ctr->addUserAdmin();
        break;
    case "updateUserAdmin":
        $ctr = new UserController();
        echo $ctr->updateUser();
        break;
    default:
        echo "404 not found";
}


?>