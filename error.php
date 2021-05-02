<head>
<?php include_once 'includes/header.php';
include_once "includes/menu.php";
switch($_GET['id'])
{
 
default:
header("Location: /error/405");
break;

case '400':?>
<title><?= $title ?>: <?= $l_error ?> 400</title>
</head>
<body>
<center>
<h2><?= $l_error ?> 400</h2>
<?= $l_badrequest ?>
<br>
</center>
</body>
<?php break;

case '401':?>
<title><?= $title ?>: <?= $l_error ?> 401 / 403</title>
</head>
<body>
<center>
<h2><?= $l_error ?> 401 / 403</h2>
<?= $l_accessd ?>
<br>
</center>
</body>
<?php break;

case '404':?>
<title><?= $title ?>: <?= $l_error ?> 404</title>
</head>
<body>
<center>
<h2><?= $l_error ?> 404</h2>
<?= $l_notfound ?>
<br>
</center>
</body>
<?php break;

case '405':?>
<title><?= $title ?>: <?= $l_error ?> 405</title>
</head>
<body>
<center>
<h2><?= $l_error ?> 405</h2>
<?= $l_methodnotallowed ?>
<br>
</center>
</body>
<?php break;

case '408':?>
<title><?= $title ?>: <?= $l_error ?> 408</title>
</head>
<body>
<center>
<h2><?= $l_error ?> 408</h2>
<?= $l_requesttimeout ?>
<br>
</center>
</body>
<?php break;

case '418':?>
<title><?= $title ?>: <?= $l_error ?> 418</title>
</head>
<body>
<center>
<h2><?= $l_error ?> 418</h2>
<?= $l_implmousse ?> ?!
<br>
</center>
</body>
<?php break;

case '429':?>
<title><?= $title ?>: <?= $l_error ?> 429</title>
</head>
<body>
<center>
<h2><?= $l_error ?> 429</h2>
<?= $l_toomrequest ?>
<br>
</center>
</body>
<?php break;

case '500':?>
<title><?= $title ?>: <?= $l_error ?> 500 / 502</title>
</head>
<body>
<center>
<h2><?= $l_error ?> 500 / 502</h2>
<?= $l_errorserver ?>
<br>
</center>
</body>
<?php break;

case '501':?>
<title><?= $title ?>: <?= $l_error ?> 501</title>
</head>
<body>
<center>
<h2><?= $l_error ?> 501</h2>
<?= $l_notimplemented ?>
<br>
</center>
</body>
<?php break;

case '505':?>
<title><?= $title ?>: <?= $l_error ?> 505</title>
</head>
<body>
<center>
<h2><?= $l_error ?> 505</h2>
<?= $l_httpnotsupported ?>
<br>
</center>
</body>
<?php break;

case '510':?>
<title><?= $title ?>: <?= $l_error ?> 510</title>
</head>
<body>
<center>
<h2><?= $l_error ?> 510</h2>
<?= $l_notextended ?>
<br>
</center>
</body>
<?php break;

 } 
include_once 'includes/footer.php';?>
