<?php
require_once "./models/category.php";
require_once "./helpers/AuthTrait.php";
class CategoryController
{
    use AuthTrait;

    public function remove(){
        $id = $_GET['id'];
        Category::delete($id);
        header('location: ./danh-muc');
    }
    public function editCategoryPage()
    {
        global $baseUrl;
        $id = $_GET['id'];
        $model = Category::where('id', '=', $id)->first();
        // if($model == null){
        //     header('location: ./');
        //     die;
        // }
        include_once './views/admin/category/updateCategory.php';
    }
    public function categoryAdminPage()
    {
        global $baseUrl;
        $category = Category::all()->get();
        include_once './views/admin/category/categoryPage.php';
    }
    public function addCategoryPage()
    {
        global $baseUrl;
        include_once './views/admin/category/addFormCategory.php';
    }
    public function addCategory()
    {
        $model = new Category();
        $cols = " ";
        $vals = " ";
        foreach($_POST as $key => $value)
        {
            $cols .= " " . $key .",";
            $vals .= " '" . $value ."',";
        }
        $cols = rtrim($cols, ',');
        $vals = rtrim($vals, ',');
        $sqlQuery = "insert into " . $model->table
                        . " ($cols) values ( $vals)";
        User::rawQuery($sqlQuery);
        header("location: ./admin/danh-muc");
    }
    public function updateCategory()
    {
        $model = Category::where('id', '=', $_POST['id'])->first();
        if($model == null){
            header('location: ./admin/danh-muc');
            die;
        }
        $cols = " ";
        foreach($_POST as $key => $val){
            if($key == 'id'){
                continue;
            }
            $cols .= " " . $key. " = '$val',";
        }
        $cols = rtrim($cols, ',');
        $sqlQuery = "update " . $model->table 
                    . " set $cols "
                    . " where id = " . $model->id;
        Category::rawQuery($sqlQuery);
        header('location: ./admin/danh-muc');
    }
}


?>