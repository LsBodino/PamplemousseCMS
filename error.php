<?php require_once 'includes/header.php';
require_once "includes/menu.php";
$l_error = $lg['l_error'];
$smarty->assign("l_error", $l_error);
switch($_GET['id'])
{
default:
header("Location: /error/405");
break;

// ERROR 400
case '400':
    $l_badrequest = $lg['l_badrequest'];
    $smarty->assign("l_badrequest", $l_badrequest);
    $smarty->display("themes/$theme/error400.tpl");
break;

// ERROR 401
case '401':
    $l_accessd = $lg['l_accessd'];
    $smarty->assign("l_accessd", $l_accessd);
    $smarty->display("themes/$theme/error401.tpl");    
break;

// ERROR 404
case '404':
    $l_notfound = $lg['l_notfound'];
    $smarty->assign("l_notfound", $l_notfound);
    $smarty->display("themes/$theme/error404.tpl");     
break;

// ERROR 405
case '405':
    $l_methodnotallowed = $lg['l_methodnotallowed'];
    $smarty->assign("l_methodnotallowed", $l_methodnotallowed);
    $smarty->display("themes/$theme/error405.tpl");      
break;

// ERROR 408
case '408':
    $l_requesttimeout = $lg['l_requesttimeout'];
    $smarty->assign("l_requesttimeout", $l_requesttimeout);
    $smarty->display("themes/$theme/error408.tpl");     
break;

// ERROR 418
case '418':
    $l_implmousse = $lg['l_implmousse'];
    $smarty->assign("l_implmousse", $l_implmousse);
    $smarty->display("themes/$theme/error418.tpl");      
break;

// ERROR 429
case '429':
    $l_toomrequest = $lg['l_toomrequest'];
    $smarty->assign("l_toomrequest", $l_toomrequest);
    $smarty->display("themes/$theme/error429.tpl"); 
break;

// ERROR 500
case '500':
    $l_errorserver = $lg['l_errorserver'];
    $smarty->assign("l_errorserver", $l_errorserver);
    $smarty->display("themes/$theme/error500.tpl");   
break;

// ERROR 501
case '501':
    $l_notimplemented = $lg['l_notimplemented'];
    $smarty->assign("l_notimplemented", $l_notimplemented);
    $smarty->display("themes/$theme/error501.tpl");
break;

// ERROR 505
case '505':
    $l_httpnotsupported = $lg['l_httpnotsupported'];
    $smarty->assign("l_httpnotsupported", $l_httpnotsupported);
    $smarty->display("themes/$theme/error505.tpl");    
break;

// ERROR 510
case '510':
    $l_notextended = $lg['l_notextended'];
    $smarty->assign("l_notextended", $l_notextended);
    $smarty->display("themes/$theme/error510.tpl");     
break;
} 
require_once 'includes/footer.php';?>