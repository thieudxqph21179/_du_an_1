<?php
const BASE_URL = '../Face.com/views/';
class Controller{

 public function View( $url,$data=[]  ){
 
    require_once  BASE_URL.$url.".php";
 }
 

}

?>