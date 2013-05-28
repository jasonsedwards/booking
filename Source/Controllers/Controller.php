<?php
/**
 *Controls which view is seen.
 *
 * @author edwardsj
 */
include_once 'Views/View.php';

class Controller {
    function __construct(){
    }
    public function loadView($aView){
            $view = new View();
            $view->changeView($aView);
    }
    public function loadAction(){
        if(isset($_GET['action'])){
            if(file_exists('Controllers/'.$_GET['action'].'.php')){
                include 'Controllers/'.$_GET['action'].'.php';
            }else{
                echo "action does not exist";
            }
        }
    }
}
?>