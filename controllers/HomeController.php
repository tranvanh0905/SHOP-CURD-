<?php
require_once "./models/product.php";
require_once "./models/category.php";
require_once "./models/user.php";
require_once './helpers/AuthTrait.php';
class HomeController
{
    use AuthTrait;

    public function index()
    {
        global $baseUrl;
        // $category = Category::where('id','=','65')->get();
    
        // $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : null;

        // if($keyword != null){
        //     $product = Product::where('name', 'like', "%$keyword%")->get();    
        // }else{
        // }
       
        // $product = Product::delete(10);
        // echo "<pre>";
        // var_dump($product);die;
        $category = Category::all()->limit(3)->get();
        $product = Product::all()->get();
        include_once './views/homepage.php';
    }
    public function notFoundPage404(){
        global $baseUrl;
        header("location:./views/404.php");
    }   
    
    public function Admin()
    {
        global $baseUrl;
        include_once './views/admin/index.php';
    }
    public function loginStatus()
    {
        extract($_POST);
        $userLogin = User::where('name','=', $username)->first();
        $emailLogin = User::where('email','=', $username)->first();
        if($userLogin != null && 
        password_verify($password, $userLogin->password)){
            $_SESSION['auth']=[
                "id" => $userLogin->id,
                "name" => $userLogin->name,
                "email" => $userLogin->email,
                "role" => $userLogin->role
            ];
            header("location:./");die;
        }
        // else if($emailLogin != null && 
        // password_verify($password, $emailLogin->password)){
        //     $_SESSION['auth']=[
        //         "id" => $emailLogin->id,
        //         "name" => $emailLogin->name,
        //         "email" => $emailLogin->email,
        //         "role" => $emailLogin->role
        //     ];
        //     header("location:./");die;
        // }
        header("location:./dang-nhap-tai-khoan?msg=Vui lòng xem lại tài khoản, email và mật khẩu");
        }
}

?>