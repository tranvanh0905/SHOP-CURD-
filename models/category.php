<?php
require_once "./models/baseModel.php";
class Category extends BaseModel
{
    public $table = "categories";
    // public function getCate(){
    //     $cate = Category::where('categories_name', '=', $this->categories_name)->get();
    //     var_dump($cate);die;
    //     return $cate[0];
    // }
}



?>