<head>
<?php include 'includes/header.php';?>
<title><?= $title ?>: Plan du Site</title>
</head>
<body>
<center>
<h2>Plan du site</h2>
<a href="../index">Accueil</a><br>
<a href="../changelog">Changelog</a><br>
<a href="../livredor">Livre d'Or</a><br>
<a href="../plan">Plan du site</a><br><br>
Espace Membre<br>
<?php if(isset($_SESSION['id'])) { ?>
Espace Membre > <a href="../profil/<?= $_SESSION['id'] ?>">Mon Profil</a><br>
Espace Membre > <a href="../logout">Déconnexion</a><br><br>
<?php }else{ ?>
Espace Membre > <a href="../inscription">Inscription</a><br>
Espace Membre > <a href="../login">Connexion</a><br><br>
<?php } ?>
<a href="../liste/organisations">Liste des organisations</a><br><br>
<a href="../liste/pays">Liste des pays</a><br>
<!-- Liste des pays temporaire -->
Pays > <a href="../pays/1">Afghanistan</a><br>
</center>
</body>
<?php include 'includes/footer.php';?>