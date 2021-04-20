<head>
<?php include_once 'includes/header.php';
include_once "includes/menu.php";?>
<title><?= $title ?>: <?= $l_error ?> 500</title>
</head>
<body>
<center>
<h2><?= $l_error ?> 500</h2>
<?= $l_errorserver ?>
<br>
</center>
</body>
<?php include_once 'includes/footer.php';?>
