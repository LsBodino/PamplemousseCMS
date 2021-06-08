<?php
session_start();
require_once "includes/config.php";
require_once "includes/cookies.php";
?>
<!--

######                               ###                                                                       ####  ##   ##    #####
  ##  ##                               ##                                                                     ##  ##  ### ###  ##   ##
  ##  ##   ####    ##  ##   ######     ##      ####    ##  ##    ####    ##  ##    #####    #####    ####    ##       #######  #
  #####       ##   #######   ##  ##    ##     ##  ##   #######  ##  ##   ##  ##   ##       ##       ##  ##   ##       #######   #####
  ##       #####   ## # ##   ##  ##    ##     ######   ## # ##  ##  ##   ##  ##    #####    #####   ######   ##       ## # ##       ##
  ##      ##  ##   ##   ##   #####     ##     ##       ##   ##  ##  ##   ##  ##        ##       ##  ##        ##  ##  ##   ##  ##   ##
 ####      #####   ##   ##   ##       ####     #####   ##   ##   ####     ####    ######   ######    #####     ####   ##   ##   #####
                            ####

Meta -->
<meta name="title" content="<?= $title?>">
<meta name="description" content="<?= $descr?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow">
<meta charset="utf-8">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $link?>/">
<meta property="og:title" content="<?= $title?>">
<meta property="og:description" content="<?= $descr?>">
<meta property="og:image" content="<?= $link?>/img/favicon.png">
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?= $link?>/">
<meta property="twitter:title" content="<?= $title?>">
<meta property="twitter:description" content="<?= $descr?>">
<meta property="twitter:image" content="<?= $link?>/img/favicon.png">

<!-- Link & Script -->
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
<link href="<?= $link?>/themes/<?= $theme?>/css/bootstrap.css" rel="stylesheet" media="all" type="text/css">
<script src="<?= $link?>/themes/<?= $theme?>/js/bootstrap.js"></script>
<link rel="shortcut icon" href="<?= $link?>/img/favicon.png" type="image/x-icon"/>