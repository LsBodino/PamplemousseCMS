<?php
session_start();
include_once "includes/config.php";
include_once "includes/cookies.php";
include_once "lang/$lang.php"; 
?>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
<link href="<?= $link?>/assets/css/bootstrap.min.css" rel="stylesheet" media="all" type="text/css">
<link href="<?= $link?>/themes/<?= $theme?>/css/bootflat.css" rel="stylesheet" media="all" type="text/css">
<script src="<?= $link?>/themes/<?= $theme?>/js/global.js"></script>
<script src="<?= $link?>/themes/<?= $theme?>/js/bootstrap.min.js"></script>
<script src="<?= $link?>/themes/<?= $theme?>/js/application.js"></script>
<script src="<?= $link?>/themes/<?= $theme?>/js/jquery.js"></script>
<script src="<?= $link?>/themes/<?= $theme?>/js/respond.min.js"></script>
<script src="<?= $link?>/themes/<?= $theme?>/js/site.min.js"></script>
<link rel="shortcut icon" href="<?= $link?>/img/favicon.ico" type="image/x-icon"/>