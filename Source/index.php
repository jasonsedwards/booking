<?php
include_once "Views/header.php";

include "Controllers/Controller.php";
$controller = new Controller();
if(isset($_GET['page'])){
    $controller->loadView($_GET['page']);
}else{
    $controller->loadView('home');
}
include_once "Views/footer.php";

?>