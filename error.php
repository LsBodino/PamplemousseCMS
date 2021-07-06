<?php require_once 'includes/header.php';
require_once "includes/menu.php";

// Switch
switch($_GET['id'])
{
default:
    // Default error
    $smarty->display("themes/$theme/error405.tpl");
break;

case '400':
    // Error 400
    $smarty->display("themes/$theme/error400.tpl");
break;

case '401':
    // Error 401
    $smarty->display("themes/$theme/error401.tpl");
break;

case '404':
    // Error 404
    $smarty->display("themes/$theme/error404.tpl");
break;

case '405':
    // Error 405
    $smarty->display("themes/$theme/error405.tpl");
break;

case '408':
    // Error 408
    $smarty->display("themes/$theme/error408.tpl");
break;

case '413':
    // Error 413
    $smarty->display("themes/$theme/error413.tpl");
break;

case '415': 
    // Error 415
    $smarty->display("themes/$theme/error415.tpl");
break;

case '418':
    // Error 418
    $smarty->display("themes/$theme/error418.tpl");
break;

case '429':
    // Error 429
    $smarty->display("themes/$theme/error429.tpl");
break;

case '500':
    // Error 500
    $smarty->display("themes/$theme/error500.tpl");
break;

case '501':
    // Error 501
    $smarty->display("themes/$theme/error501.tpl");
break;

case '505':
    // Error 505
    $smarty->display("themes/$theme/error505.tpl");
break;

case '510':
    // Error 510
    $smarty->display("themes/$theme/error510.tpl");
break;
}
require_once 'includes/footer.php';?>