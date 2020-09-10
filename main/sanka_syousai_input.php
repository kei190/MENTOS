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
    $count = $pdo -> prepare('select COUNT(*) from sanka where sanksuser_id = ?');
    $count ->execute([$_SESSION['login_id']]);

    if ($count == 0){
        header('Location: "sanka_syousai_output1.php"');
    }else{
        header('Location: "sanka_syousai_output2.php"');
    }
?>
</body>
</html>