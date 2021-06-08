<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';
$l_homepage = $lg['l_homepage'];
$smarty->assign("l_homepage", $l_homepage);

$l_mostrecentarticles = $lg['l_mostrecentarticles'];
$smarty->assign("l_mostrecentarticles", $l_mostrecentarticles);

$l_noarticle = $lg['l_noarticle'];
$smarty->assign("l_noarticle", $l_noarticle);

$l_notregistered = $lg['l_notregistered'];
$smarty->assign("l_notregistered", $l_notregistered);

$l_notregisteredsection1 = $lg['l_notregisteredsection1'];
$smarty->assign("l_notregisteredsection1", $l_notregisteredsection1);

$l_notregisteredsection2 = $lg['l_notregisteredsection2'];
$smarty->assign("l_notregisteredsection2", $l_notregisteredsection2);

$l_read = $lg['l_read'];
$smarty->assign("l_read", $l_read);

$articlesp = $db->prepare('SELECT * FROM articles WHERE visible = 1 AND pin = 1 ORDER by id DESC LIMIT 4');
$articlesp->execute();
$smarty->assign('articlesp',$articlesp);
$articlesnp = $db->prepare('SELECT * FROM articles WHERE visible = 1 AND pin = 0 ORDER by id DESC LIMIT 8');
$articlesnp->execute();
$nbarticlesp = $articlesp->rowcount();
$nbarticlesnp = $articlesnp->rowcount();
$nbarticles = $nbarticlesp + $nbarticlesnp;

$smarty->assign('nbarticles', $nbarticles);
$smarty->assign('articlesnp',$articlesnp);
$smarty->display("themes/$theme/homepage.tpl");
require_once 'includes/footer.php';
?>