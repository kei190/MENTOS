<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>コロナで出会っちゃった!? てへっ☆</title>
</head>
<body>
<?php
session_start();
/* $pdo = new PDO('mysql:host=mysql57.mentosu2.sakura.ne.jp;dbname=mentosu2_ogawa;charset=utf8',
    'mentosu2', 'zvpg7916');
*/
$pdo = new PDO('mysql:host=localhost;dbname=shop;charset=utf8',
    'staff', 'password');
$sql = $pdo->prepare('INSERT INTO keiziban VALUES(?,null,?)');
$sql->execute([$_SESSION['login_id'],$_POST['toukou']]);
header('Location: keijiban_toukou.php');
?>
</body>
</html>