<head>
<?php include 'includes/header.php';
include 'includes/articles.php';
?>
 <style> textarea.form-control {
    height: 50%;
} </style>
<title><?= $title ?>: Panel - Créer un article</title>
</head>
<body>
<center>
<div class="container">
<div class="row">
<h2>Créer un article</h2>
<?php if(isset($message)) {
            echo '<div class="alert alert-success alert-dismissable"><strong>'.$message.'</strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>';
         } ?>
<form method="POST">
<div class="form-group">
      <input type="text" name="article_titre" id="article_titre" class="form-control" placeholder="Titre" required/>
      <br>
      <textarea name="article_contenu" id="article_contenu" class="form-control" row="25" cols="100" placeholder="Contenu" required></textarea>
      </div>
      <input type="submit" class="bouton" value="Publier" />
   </form>
</div></div>
</center>
</body>
<?php include 'includes/footer.php';?>
