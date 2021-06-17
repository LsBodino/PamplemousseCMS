<?php
require_once 'includes/p-header.php';

// Template call
if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){
        $smarty->display("themes/$paneltheme/p-menu.tpl");
    }
}
?> 