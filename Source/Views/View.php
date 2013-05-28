<?php

/**
 * Description of View
 *
 * Provides View methods for use by the controller
 * to determine the correct view to use.
 * 
 * @author Jason Edwards jason.edwards@thelowry.com
 */
class View {
    function __construct()
    {
    }
    public function changeView($view)
    {
        if(file_exists('Views/'.$view.'.php')){
            include_once 'Views/'.$view.'.php';
        }else{
            echo "view does not exist";
        }
    }
}

?>
