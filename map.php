<head>
<?php include 'includes/header.php';?>
<title><?= $title ?>: Map</title>
</head>
<body>
<center>
<h2>Map</h2>
<a href="../index">House</a><br>
<a href="../map">Map</a><br><br>
Pages<br>
<?php $pages = NULL;
$pages = $db->query('SELECT * FROM pages ORDER by id DESC');
while($p = $pages->fetch()) { ?>
Pages > <a href="<?= $link?>/page/<?= $p['id'] ?>"><?= $p['titre'] ?></a><br>
<?php } ?><br>
Space<br>
<?php if(isset($_SESSION['id'])) { ?>
Space > <a href="../space/<?= $_SESSION['id'] ?>">My Space</a><br>
Space > <a href="../logout">Disconnect</a><br><br>
<?php }else{ ?>
Space > <a href="../register">Register</a><br>
Space > <a href="../login">Login</a><br><br>
<?php } ?>
</center>
</body>
<?php include 'includes/footer.php';?>