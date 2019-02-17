<?php
require_once './models/user.php';
require_once './helpers/AuthTrait.php';
class UserController
{
    use AuthTrait;
    // link to page Login
    public function User()
    {
        global $baseUrl;
        include_once './views/user/login.php';
    }
    // link to page Register
    public function register()
    {
        global $baseUrl;
        include './views/user/register.php';
    }
    // link to page add accounts ( Admin )
    public function pageAdd(){
        global $baseUrl;
        include './views/admin/user/addUser.php';
    }
    // function checkEmail and checkUserName
    public function checkEmail(){
        extract($_POST);
        $emailCheck = User::where("email","=",$email)->get();
        if($emailCheck != false){
            echo(json_encode(false));
        }else{
            echo(json_encode(true));
        }
    }
    public function checkUser(){
        extract($_POST);
        $userCheck = User::where("name","=",$name)->get();
        if($userCheck != false){
            echo(json_encode(false));
        }else{
            echo(json_encode(true));
        }
    }
    // function register accounts
    public function addUser()
    {
        extract($_POST);
        $model = new User();
        $cols = " ";
        $vals = " ";
        $emailCheck = User::where("email","=",$email)->first();
        foreach($_POST as $key => $value)
        {
        if($key == "password"){
            $cols .= " " . $key .",";
            $vals .= " '" . password_hash($value,PASSWORD_DEFAULT) ."',";
        }else if($key == "rePassword"){
            $cols .= "";
            $vals .= "";
        }
        else{
            $cols .= " " . $key .",";
            $vals .= " '" . $value ."',";
        }
        }
        $cols = rtrim($cols, ',');
        $vals = rtrim($vals, ',');
        $sqlQuery = "insert into " . $model->table
                        . " ($cols) values ( $vals)";
        User::rawQuery($sqlQuery);
        header("location: ./dang-nhap-tai-khoan");        
}
    // function make a new account ( Admin )
    public function addUserAdmin()
    {
        extract($_POST);
        $model = new User();
        $cols = " ";
        $vals = " ";
        foreach($_POST as $key => $value)
        {
        if($key == "password"){
            $cols .= " " . $key .",";
            $vals .= " '" . password_hash($value,PASSWORD_DEFAULT) ."',";
        }else if($key == "rePassword"){
            $cols .= "";
            $vals .= "";
        }
        else{
            $cols .= " " . $key .",";
            $vals .= " '" . $value ."',";
        }
        }
        $cols = rtrim($cols, ',');
        $vals = rtrim($vals, ',');
        $sqlQuery = "insert into " . $model->table
                        . " ($cols) values ( $vals)";
        User::rawQuery($sqlQuery);
        header("location: ./admin/tai-khoan");        
    }
  
    // function edit account ( Admin )
    public function updateUser()
    {
        $model = User::where('id','=',$_POST['id'])->first();
        if($model == null){
            header('location: ./admin/tai-khoan');
            die;
        }
        $cols = " ";
        
        if($_POST['password'] == ""){
            $_POST['password'] = $model->password;
        }else{
            $_POST['password'] = password_hash($_POST['password'],PASSWORD_DEFAULT);
        }
        foreach($_POST as $key => $value)
        { 
        if($key == 'id'){
            continue;
        }
        else{
            $cols .= " $key = '" . $value ."',";
        }
        }
        $cols = rtrim($cols, ',');
        $model = User::find($_POST['id']);
        $sqlQuery = "update " . $model->table
                        . " set $cols where id = " .$model->id ;
        User::rawQuery($sqlQuery);
        header("location: ./admin/tai-khoan");
    }
    // link to edit page ( Admin )
    public function updateUserPage(){
        global $baseUrl;
        $id = $_GET['id'];
        $model = User::where('id', '=', $id)->first();
        include_once './views/admin/user/editUser.php';
    }
    // link to manager page ( Admin )
    public function pageUser()
    {
        global $baseUrl;
        $userData = User::all()->get();
        include_once './views/admin/user/userPage.php';
    }
    // function delete accounts ( Admin )
    public function remove(){
        $id = $_GET['id'];
        User::delete($id);
        header('location: ./admin/tai-khoan');
    }

}




?>