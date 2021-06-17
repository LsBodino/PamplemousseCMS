<?php
require_once "includes/config.php";
require_once "includes/cookies.php";
require_once "includes/lang.php";
require_once "themes/$paneltheme/config.php";

$smarty->assign("paneltheme_author", $theme_author);
$smarty->assign("paneltheme_authorlink", $theme_authorlink);
$smarty->assign("paneltheme_description", $theme_description);
$smarty->assign("paneltheme_title", $theme_title);
$smarty->assign("paneltheme_version", $theme_version);
?>
<!--

  _ (`-.     ('-.      _   .-')       _ (`-.                ('-.    _   .-')                                .-')      .-')       ('-.                _   .-')      .-')
  ( (OO  )   ( OO ).-. ( '.( OO )_    ( (OO  )             _(  OO)  ( '.( OO )_                             ( OO ).   ( OO ).   _(  OO)              ( '.( OO )_   ( OO ).
 _.`     \   / . --. /  ,--.   ,--.) _.`     \  ,--.      (,------.  ,--.   ,--.) .-'),-----.  ,--. ,--.   (_)---\_) (_)---\_) (,------.    .-----.   ,--.   ,--.)(_)---\_)
(__...--''   | \-.  \   |   `.'   | (__...--''  |  |.-')   |  .---'  |   `.'   | ( OO'  .-.  ' |  | |  |   /    _ |  /    _ |   |  .---'   '  .--./   |   `.'   | /    _ |
 |  /  | | .-'-'  |  |  |         |  |  /  | |  |  | OO )  |  |      |         | /   |  | |  | |  | | .-') \  :` `.  \  :` `.   |  |       |  |('-.   |         | \  :` `.
 |  |_.' |  \| |_.'  |  |  |'.'|  |  |  |_.' |  |  |`-' | (|  '--.   |  |'.'|  | \_) |  |\|  | |  |_|( OO ) '..`''.)  '..`''.) (|  '--.   /_) |OO  )  |  |'.'|  |  '..`''.)
 |  .___.'   |  .-.  |  |  |   |  |  |  .___.' (|  '---.'  |  .--'   |  |   |  |   \ |  | |  | |  | | `-' /.-._)   \ .-._)   \  |  .--'   ||  |`-'|   |  |   |  | .-._)   \
 |  |        |  | |  |  |  |   |  |  |  |       |      |   |  `---.  |  |   |  |    `'  '-'  '('  '-'(_.-' \       / \       /  |  `---. (_'  '--'\   |  |   |  | \       /
 `--'        `--' `--'  `--'   `--'  `--'       `------'   `------'  `--'   `--'      `-----'   `-----'     `-----'   `-----'   `------'    `-----'   `--'   `--'  `-----'

<-- Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow">
<meta name="language" content="<?= $lang?>">
<meta name="generator" content="PamplemousseCMS">
<meta charset="utf-8">

<!-- Link & Script -->
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
<link href="<?= $link?>/themes/<?= $paneltheme?>/css/bootstrap.css" rel="stylesheet" media="all" type="text/css">
<script src="<?= $link?>/themes/<?= $paneltheme?>/js/bootstrap.js"></script>
<link rel="shortcut icon" href="<?= $link?>/img/favicon.png" type="image/x-icon"/>
