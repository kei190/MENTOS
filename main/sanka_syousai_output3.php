<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>コロナで出会っちゃった!? てへっ☆</title>
</head>
<body>
<?php
    session_start();
    $pdo = new PDO('mysql:host=mysql157.mentosu2.sakura.ne.jp;dbname=mentosu2_ogawa;charset=utf8','mentosu2','zvpg7916');
    $sql2 = $pdo -> prepare('select * from bosyu, sanka where ? = sanksuser_id && user_id = bosyuuser_id && bosyu.categoly_id = sanka.categoly_id && tema = ?');
    $sql2 ->execute([$_SESSION['login_id'], $_POST['tema']]);


?>
</body>
</html>