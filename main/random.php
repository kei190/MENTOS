<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php
    $pdo = new PDO('mysql:host=mysql157.mentosu2.sakura.ne.jp;dbname=mentosu2_ogawa;charset=utf8','mentosu2','zvpg7916');
    $count = $pdo -> prepare('select COUNT(*) from bosyu');
    $rand = rand(1,$count);
    $sql5 = $pdo -> prepare('select * from bosyu where id = ?');
    $sql5 ->execute([$rand]);
?>


</body>
</html>