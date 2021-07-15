<?php
require_once "includes/config.php";
require_once "includes/cookies.php";
require_once "includes/lang.php";
require_once "themes/$paneltheme/config.php";

$smarty->assign("paneltheme_author", $theme_author);
$smarty->assign("paneltheme_authorurl", $theme_authorurl);
$smarty->assign("paneltheme_description", $theme_description);
$smarty->assign("paneltheme_name", $theme_name);
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
<meta name="generator" content="<? $l_pamplemoussecms ?>">
<meta charset="utf-8">

<!-- Favicon -->
<link rel="shortcut icon" href="<?= $link?>/img/favicon.png" type="image/x-icon"/>