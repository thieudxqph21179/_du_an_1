<?php
// var_dump('hello'); die();

const URL_MODEL = './models/';
const URL_CLIENT = './views/client/';
const URL_SERVER = './views/server/';
const URL_CONTROLLER = './controllers/';
// var_dump($_GET);die;
if (!isset($_GET["admin"])) {
    
    // var_dump(BASE_URL."views/layouts/home.php");die;
    require_once(URL_CLIENT . 'index.php');
} else {
    echo "server";
    require_once(URL_SERVER . 'index.php');
}
?>

