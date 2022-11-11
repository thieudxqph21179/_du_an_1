<?php
require_once(URL_MODEL.'baseModel.php');
class Product {
    protected $model;
    public function __construct()
	{
    $this->model  = new BaseModel ;
      
    }
 public $table="san_pham";
 public function lay_san_pham(){

    $sql="select * from  san_pham order by don_gia desc limit 4 ";
    $stmt = $this->model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
 }
}

?>
