<?php require_once 'includes/header.php';
require_once "includes/menu.php";

// Switch
switch($_GET['id'])
{
default:
    header("Location: $link/error/405");
break;

// ERROR 400
case '400':
    $smarty->display("themes/$theme/error400.tpl");
break;

// ERROR 401
case '401':
    $smarty->display("themes/$theme/error401.tpl");
break;

// ERROR 404
case '404':
    $smarty->display("themes/$theme/error404.tpl");
break;

// ERROR 405
case '405':
    $smarty->display("themes/$theme/error405.tpl");
break;

// ERROR 408
case '408':
    $smarty->display("themes/$theme/error408.tpl");
break;

// ERROR 418
case '418':
    $smarty->display("themes/$theme/error418.tpl");
break;

// ERROR 429
case '429':
    $smarty->display("themes/$theme/error429.tpl");
break;

// ERROR 500
case '500':
    $smarty->display("themes/$theme/error500.tpl");
break;

// ERROR 501
case '501':
    $smarty->display("themes/$theme/error501.tpl");
break;

// ERROR 505
case '505':
    $smarty->display("themes/$theme/error505.tpl");
break;

// ERROR 510
case '510':
    $smarty->display("themes/$theme/error510.tpl");
break;
}
require_once 'includes/footer.php';?>