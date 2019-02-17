<?php
class BaseModel 
{
    // tạo kết nối đến database
    function __construct()
    {
        $this->connect = new PDO("mysql:host=127.0.0.1;dbname=php2;charset=utf8",
                            "root", "");
    }
    // hàm truy vấn dữ liệu với mệnh đề where
    public static function where($col, $operation, $val)
    {
        $model = new static();
        $model->queryBuilder = "select * from " . $model->table
                                    . " where $col $operation '$val'";
        return $model;
    }
    // hàm truy vấn dữ liệu trong bảng theo cột ID
    public static function find($id)
    {
        $model = new static();
        $model->queryBuilder = "select * from " . $model->table
                                    . " where ID = '$id'";
        return $model->first();
    }
    // hàm truy vấn toàn bộ dữ liệu trong bảng
    public static function all()
    {
        $model = new static();
        $model->queryBuilder = "select * from " . $model->table;
        return $model;
     
    }
    // hàm sử dụng thêm điều kiện AND
    public function andWhere($col, $operation, $val)
    {
        $this->queryBuilder .= " and $col $operation $val";
        return $this;
    }
     // hàm sử dụng thêm điều kiện OR
    public function orWhere($col, $operation, $val)
    {
        $this->queryBuilder .= " or $col $operation $val";
        return $this;
    }
    // hàm sử dụng điều kiện LIMIT
    public function limit($value)
    {
        $this->queryBuilder .= " limit $value ";
        return $this;
    }
    //hàm sử dụng điều kiện ORDER BY
    public function orderBy($col, $oper)
    {
        $this->queryBuilder .= " order by $col $oper";
        return $this;
    }
    // hàm xóa dữ liệu trong bảng theo ID
    public static function delete($id)
    {
        $model = new static();
        $model->queryBuilder = "delete from " . $model->table 
                                . " where id = " . $id;
        $stmt = $model->connect->prepare($model->queryBuilder);
        $stmt->execute();
        return true;
    }
    // hàm trả về toàn bộ dữ liệu trong database
    public function get()
    {
        $stmt = $this->connect->prepare($this->queryBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
    }
    // hàm lấy giá trị đầu tiên của bảng
    public function first()
    {
        $arr = $this->get();
        return $arr['0'];
    }
    // hàm tùy biến
    public static function rawQuery($sqlQuery)
    {
        $model = new static();
        $stmt = $model->connect->prepare($sqlQuery);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>