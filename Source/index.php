<?php
include "View/header.php";

if(isset($_GET['page']))
{
  include "View/".$_GET['page'].".php";  
}else{
    include "View/home.php";    
}

include "View/footer.php";

?>
