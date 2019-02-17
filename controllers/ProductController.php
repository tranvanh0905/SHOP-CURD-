<?php
require_once './models/product.php';
require_once './helpers/AuthTrait.php';
class ProductController
{
    use AuthTrait;

    public function remove(){
        $id = $_GET['id'];
        Product::delete($id);
        header('location: ./admin/san-pham');
    }   
    public function addProduct()
    {
        $model = new Product();
        $cols = " ";
        $vals = " ";
        $img = $_FILES['image'];
        $_POST['image'] = null;
        // lưu ảnh
        if($img['size'] > 0){
            $filename = "public/images/products/" . uniqid() . "-" . $img['name'];
            move_uploaded_file($img['tmp_name'], $filename);
            $_POST['image'] = $filename;
        }
        foreach($_POST as $key => $value)
        {
            if($key == "size" || $key == "color"){
            $cols .= " " . $key .",";
            $vals .= " '" . implode(',',$value) ."',";    
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
        Product::rawQuery($sqlQuery);
        header('location: ./admin/san-pham');
    }
    public function product()
    {
        global $baseUrl;
        $categories_id = isset($_GET['id']) ? $_GET['id'] : null;
        if($categories_id != null){
            $category = Category::all()->get();
            $product = Product::all()->where('id','=',"$categories_id")->get();
        }else{
            $category = Category::all()->get();
            $product = Product::all()->get();
        }
        include_once './views/product/productPage.php';
    }
    public function productAdmin()
    {
        global $baseUrl;
        $category = Category::all()->get();
        $product = Product::all()->get();
        include_once './views/admin/product/productPage.php';
    }
    public function productAddPage()
    {
        global $baseUrl;
        $category = Category::all()->get();
        include_once './views/admin/product/addProduct.php';
    }
    public function productUpdatePage(){
        global $baseUrl;
        $id = $_GET['id'];
        $model = Product::where('id', '=', $id)->first();
        $category = Category::all()->get();
        include_once './views/admin/product/updateProduct.php';
    }
    public function updateProduct()
    {
        $model = Product::where('id', '=', $_POST['id'])->first();
        if($model == null){
            header('location: ./admin/san-pham');
            die;
        }
        $cols = " ";
        $img = $_FILES['image'];
        $_POST['image'] = $model->image;
        // lưu ảnh
        if($img['size'] > 0){
            $filename = "public/images/products/" . uniqid() . "-" . $img['name'];
            move_uploaded_file($img['tmp_name'], $filename);
            $_POST['image'] = $filename;
        }
        foreach($_POST as $key => $val){
            if($key == 'id'){
                continue;
            }else if($key == 'size' || $key == 'color'){
                $cols .= " " .$key ." = " ."'" .implode(',',$val) ."'," ;
            }else{
            $cols .= " " . $key. " = '$val',";
            }
        }
        $cols = rtrim($cols, ',');
        $sqlQuery = "update " . $model->table 
                    . " set $cols "
                    . " where id = " .$model->id;
        Category::rawQuery($sqlQuery);
        header('location: ./admin/san-pham');
    }
}


?>