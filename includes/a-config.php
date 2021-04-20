<?php if(isset($_SESSION['id'])) {
    if($user['rank'] == 2){
      if(isset($_POST['configuration'])) {
         $wsname = htmlspecialchars($_POST['wsname']);
         $wsdescr = htmlspecialchars($_POST['wsdescr']);
         $wslink = htmlspecialchars($_POST['wslink']);
         $wslang = htmlspecialchars($_POST['wslang']);
         $wstheme = htmlspecialchars($_POST['wstheme']);
         $insertcfg = $db->prepare("UPDATE config SET wsname = ?, wsdescr = ?, wslink = ?, wslang = ?, wstheme = ? WHERE id = ?");
         $insertcfg->execute(array($wsname, $wsdescr, $wslink, $wslang, $wstheme, 1));
      }
}else{
   header("Location: /403");
}
}else{
    header("Location: /login");
}
?>