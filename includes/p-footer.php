<?php
if(isset($_SESSION['id'])){
    if($rank['p_panelaccess'] == 1){
        // Template
        $smarty->display("themes/$paneltheme/p-footer.tpl");
    }
}
?>