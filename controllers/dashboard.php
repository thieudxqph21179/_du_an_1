<?php
// require_once(URL_MODEL.'Product.php');
class Dashboard extends Controller{
  
    static function index() {
        $control = new static();
        // var_dump($products);
        $control-> View('server/dashboard',[]);
    }

}

?>