<?php
class BaseModel{

    public function __construct()
	{
        $this->conn=new PDO('mysql:host=localhost;dbname=duan1','root','');
      
    }


    static function all()
    {
        $model = new static;
        // var_dump($model);die;
        $query = " SELECT * FROM $model->table ";
        $stmt =  $model->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }






//     public static function rawQuery($sqlQuery){
// 		$model = new static();
// 		$model->queryBuilder = $sqlQuery;
// 		return $model;
// 	}



//     public function insert($arr){
// 		$this->queryBuilder = " INSERT INTO $this->table ";
// 		$cols = " (";
// 		$vals = " (";

// 		foreach ($arr as $key => $value) {
// 			$cols .= " $key,";
// 			$vals .= " :$key,";
// 		}
// 		$cols = rtrim($cols, ',');
// 		$vals = rtrim($vals, ',');
// 		$cols .= ") ";
// 		$vals .= ") ";

// 		$this->queryBuilder .= $cols . " VALUES ". $vals;
// 		$stmt = $this->conn->prepare($this->queryBuilder);
// 		foreach ($arr as $key => $value) {
// 			$stmt->bindParam(":$key", $value);
// 		}

//         $stmt->execute();
//     //   $sort = $stmt->fetchAll();
//       var_dump($stmt);
// // var_dump($stmt);die;
// 		//  return $stmt->execute();

// 		// var_dump($this->queryBuilder);die;
// 		// $result =PDO::lastInsertId();
// 		// return $result;
// 	}



//     public function execute(){
// 		$stmt = $this->conn->prepare($this->queryBuilder);
// 		return $stmt->execute();
// 	}

//     static function where($col, $con, $val)
//     {
//         $model = new static;
//         $model->queryBuilder = "SELECT * FROM $model->table WHERE $col $con '$val' ";
//         return  $model;
//     }

//      function andwhere($col, $con, $val)
//     {
//         $this->queryBuilder .= " AND  $col $con '$val' ";
//         return   $this;
//     }
    
//      function get()
//     {
//         $stmt = $this->conn->prepare($this->queryBuilder);
//         $stmt->execute();
//         return $stmt->fetchAll();
//     }

}


?>