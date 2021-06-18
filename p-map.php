<?php
require_once 'includes/p-header.php';
require_once "includes/p-menu.php";

// Database call
if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){
        $smarty->display("themes/$paneltheme/p-map.tpl");
    }else{
        $smarty->display("themes/$theme/error401.tpl");
    }
}else{
    header("Location: $link/login");
}
require_once 'includes/p-footer.php';?>