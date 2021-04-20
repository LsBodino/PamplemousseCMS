<head>
<?php include_once 'includes/header.php';
include_once 'includes/a-menu.php';
include_once 'includes/a-pages.php';
?>
<script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
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
      <input type="text" name="page_title" id="page_title" class="form-control" placeholder="<?= $l_name ?>" required/>
      <br>
      <textarea name="page_section" id="page_section" class="form-control" row="25" cols="100" placeholder="<?= $l_section ?>" required></textarea>
      <script>
         CKEDITOR.replace( 'page_section' );
      </script>
      </div>
      <input type="submit" class="bouton" value="<?= $l_publish ?>" />
   </form>
</div></div>
</center>
</body>
<?php include_once 'includes/footer.php';?>
