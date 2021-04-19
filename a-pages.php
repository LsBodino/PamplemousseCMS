<head>
<?php include 'includes/header.php';
include 'includes/pages.php';
?>
 <style> textarea.form-control {
    height: 50%;
} </style>
<title><?= $title ?>: <?= $l_panel ?> - <?= $l_createpage ?></title>
</head>
<body>
<center>
<div class="container">
<div class="row">
<h2><?= $l_createpage ?></h2>
<?php if(isset($message)) {
            echo '<div class="alert alert-success alert-dismissable"><strong>'.$message.'</strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>';
         } ?>
<form method="POST">
<div class="form-group">
      <input type="text" name="page_titre" id="page_titre" class="form-control" placeholder="<?= $l_name ?>" required/>
      <br>
      <br>
      <textarea name="page_contenu" id="page_contenu" class="form-control" row="25" cols="100" placeholder="<?= $l_section ?>" required></textarea>
      </div>
      <input type="submit" class="bouton" value="<?= $l_publish ?>" />
   </form>
</div></div>
</center>
</body>
<?php include 'includes/footer.php';?>
