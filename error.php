<head>
<?php include_once 'includes/header.php';
include_once "includes/menu.php";
switch($_GET['id'])
{
 
default:
header("Location: /error/405");
break;

case '400':?>
<title><?= $l_error ?> 400 | <?= $title ?></title>
</head>
<body>
<div class="center">
<h2><?= $l_error ?> 400</h2>
<?= $l_badrequest ?>
<br>
</div>
</body>
<?php break;

case '401':?>
<title><?= $l_error ?> 401 / 403 | <?= $title ?></title>
</head>
<body>
<div class="center">
<h2><?= $l_error ?> 401 / 403</h2>
<?= $l_accessd ?>
<br>
</div>
</body>
<?php break;

case '404':?>
<title><?= $l_error ?> 404 | <?= $title ?></title>
</head>
<body>
<div class="center">
<h2><?= $l_error ?> 404</h2>
<?= $l_notfound ?>
<br>
</div>
</body>
<?php break;

case '405':?>
<title><?= $l_error ?> 405 | <?= $title ?></title>
</head>
<body>
<div class="center">
<h2><?= $l_error ?> 405</h2>
<?= $l_methodnotallowed ?>
<br>
</div>
</body>
<?php break;

case '408':?>
<title><?= $l_error ?> 408 | <?= $title ?></title>
</head>
<body>
<div class="center">
<h2><?= $l_error ?> 408</h2>
<?= $l_requesttimeout ?>
<br>
</div>
</body>
<?php break;

case '418':?>
<title><?= $l_error ?> 418 | <?= $title ?></title>
</head>
<body>
<div class="center">
<h2><?= $l_error ?> 418</h2>
<?= $l_implmousse ?> ?!
<br>
</div>
</body>
<?php break;

case '429':?>
<title><?= $l_error ?> 429 | <?= $title ?></title>
</head>
<body>
<div class="center">
<h2><?= $l_error ?> 429</h2>
<?= $l_toomrequest ?>
<br>
</div>
</body>
<?php break;

case '500':?>
<title><?= $l_error ?> 500 / 502 | <?= $title ?></title>
</head>
<body>
<div class="center">
<h2><?= $l_error ?> 500 / 502</h2>
<?= $l_errorserver ?>
<br>
</div>
</body>
<?php break;

case '501':?>
<title><?= $l_error ?> 501 | <?= $title ?></title>
</head>
<body>
<div class="center">
<h2><?= $l_error ?> 501</h2>
<?= $l_notimplemented ?>
<br>
</div>
</body>
<?php break;

case '505':?>
<title><?= $l_error ?> 505 | <?= $title ?></title>
</head>
<body>
<div class="center">
<h2><?= $l_error ?> 505</h2>
<?= $l_httpnotsupported ?>
<br>
</div>
</body>
<?php break;

case '510':?>
<title><?= $l_error ?> 510 | <?= $title ?></title>
</head>
<body>
<div class="center">
<h2><?= $l_error ?> 510</h2>
<?= $l_notextended ?>
<br>
</div>
</body>
<?php break;

 } 
include_once 'includes/footer.php';?>
