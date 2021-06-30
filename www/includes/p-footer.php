<?php
// Template call
if(isset($_SESSION['id'])){
    if($rank['p_panelaccess'] == 1){
        $smarty->display("themes/$paneltheme/p-footer.tpl");
    }
}
?>