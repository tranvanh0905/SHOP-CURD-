<?php
require_once "./models/baseModel.php";
require_once "./models/category.php";
class Product extends BaseModel
{
    public $table = "products";

    public function getCate(){
        $cate = Category::where('id', '=', $this->cate_id)->get();
        return $cate[0];
    }
}



?>