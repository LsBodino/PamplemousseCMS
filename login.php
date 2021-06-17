<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database call
if(isset($_SESSION['id'])){
   $smarty->display("themes/$theme/error401.tpl");
   exit;
}else{
   
// Template call
   $smarty->display("themes/$theme/login.tpl");
}
require_once 'includes/footer.php'; ?>