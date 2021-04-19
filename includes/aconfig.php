<?php if(isset($_SESSION['id'])) {
    if($user['rank'] == 1){
    if(isset($_POST['wsname'])) {
       $wsname = htmlspecialchars($_POST['wsname']);
       $insertwsn = $db->prepare("UPDATE config SET wsname = ? WHERE id = ?");
       $insertwsn->execute(array($wsname, 1));
    }
    if(isset($_POST['wsdescr'])) {
      $wsdescr = htmlspecialchars($_POST['wsdescr']);
      $insertwsd = $db->prepare("UPDATE config SET wsdescr = ? WHERE id = ?");
      $insertwsd->execute(array($wsdescr, 1));
   }
   if(isset($_POST['wslink'])) {
      $wslink = htmlspecialchars($_POST['wslink']);
      $insertwsl = $db->prepare("UPDATE config SET wslink = ? WHERE id = ?");
      $insertwsl->execute(array($wslink, 1));
   }
   if(isset($_POST['wslang'])) {
      $wslang = htmlspecialchars($_POST['wslang']);
      $insertwsl2 = $db->prepare("UPDATE config SET wslang = ? WHERE id = ?");
      $insertwsl2->execute(array($wslang, 1));
   }
   if(isset($_POST['wstheme'])) {
      $wstheme = htmlspecialchars($_POST['wstheme']);
      $insertwst = $db->prepare("UPDATE config SET wstheme = ? WHERE id = ?");
      $insertwst->execute(array($wstheme, 1));
   }
} else {
   header("Location: /403");
}
} else {
    header("Location: /login");
}
 ?>