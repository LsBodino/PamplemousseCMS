<head>
<?php
include_once 'includes/header.php';
include_once 'includes/menu.php';
if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $db->prepare('SELECT * FROM users WHERE id = ?');
   $requser->execute(array($getid));
   $idexist = $requser->rowCount();
   $infom = $requser->fetch();
   $lastlogin = date_create();
   date_timestamp_set($lastlogin, $infom['lastlogin']);
   $registration = date_create();
   date_timestamp_set($registration, $infom['register']);
   if($idexist == 0){
      header("Location: /error/404");
   }else{
?>
<title><?= $title ?>: <?= $l_spaceof ?> <?php echo $infom['username']; ?></title>
</head>
<body>
   <div class="container">
      <div class="row">
         <div class="center">
            <h2><?= $l_spaceof ?> <?php echo $infom['username']; ?></h2>
            <b><?= $l_username ?>:</b> <?php echo $infom['username']; ?><br>
            <b><?= $l_rank ?>:</b>
            <?php if($infom['rank'] == 0){ echo $l_member; }
            if($infom['rank'] == 1){ echo $l_editor; }
            if($infom['rank'] == 2){ echo $l_admin; } ?><br>
            <b><?= $l_registrationdate ?></b>: <?php echo date_format($registration, 'd-m-Y H:i'); ?><br>
            <b><?= $l_lastlogin ?></b>: <?php echo date_format($lastlogin, 'd-m-Y H:i'); ?><br>
            <?php
            if(isset($_SESSION['id']) AND $infom['id'] == $_SESSION['id']) {
            ?>
               <br>
               <a href="<?= $link?>/settings" class="btn btn-primary btn-sm"><?= $l_settings ?></a><br><br>
               <a href="<?= $link?>/logout" class="btn btn-primary btn-sm"><?= $l_logout ?></a><br><br>
               <?php if($infom['rank'] >= 1){ ?>
               <a href="<?= $link?>/panel/index" class="btn btn-primary btn-sm"><?= $l_panel ?></a><br>
            <?php
            } }
            ?>
         </div>
      </div>
   </div>
</body>
<?php
} }
include_once 'includes/footer.php';
?>