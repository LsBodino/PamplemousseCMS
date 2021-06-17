<?php
// Template call
if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){
        $smarty->display("themes/$paneltheme/p-footer.tpl");
    }
}
?>