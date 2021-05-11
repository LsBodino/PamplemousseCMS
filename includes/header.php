<?php
$go = microtime(true);
session_start();
include_once "includes/config.php";
include_once "includes/cookies.php";
include_once "lang/$lang.php"; 
?>

<!-- Meta -->
<meta name="title" content="<?= $title?>">
<meta name="description" content="<?= $descr?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $link?>/">
<meta property="og:title" content="<?= $title?>">
<meta property="og:description" content="<?= $descr?>">
<meta property="og:image" content="<?= $link?>/img/favicon.ico">
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?= $link?>/">
<meta property="twitter:title" content="<?= $title?>">
<meta property="twitter:description" content="<?= $descr?>">
<meta property="twitter:image" content="<?= $link?>/img/favicon.ico">

<!-- Link & Script -->
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
<link href="<?= $link?>/themes/<?= $theme?>/css/bootstrap.css" rel="stylesheet" media="all" type="text/css">
<script src="<?= $link?>/themes/<?= $theme?>/js/global.js"></script>
<script src="<?= $link?>/assets/js/bootstrap.js"></script>
<script src="<?= $link?>/assets/js/jquery.js"></script>
<script src="<?= $link?>/themes/<?= $theme?>/js/respond.min.js"></script>
<link rel="shortcut icon" href="<?= $link?>/img/favicon.ico" type="image/x-icon"/>
<?php
$stop = microtime(true);
$time = $stop - $go;
$time2 = substr($time, 0, 5);
?>