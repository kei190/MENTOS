<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>コロナで出会っちゃった!? てへっ☆</title>
</head>
<body>
<?php
session_start();
$pdo = new PDO('mysql:host=mysql57.mentosu2.sakura.ne.jp;dbname=mentosu2_ogawa;charset=utf8',
    'mentosu2', 'zvpg7916');
$sql = $pdo->prepare('SELECT * FROM korona_user where user_id=? and password=?');
$sql -> execute([$_POST['login_id'],$_POST['login_pass']]);
$result = $sql->fetch();

$pdo = new PDO('mysql:host=mysql57.mentosu2.sakura.ne.jp;dbname=mentosu2_ogawa;charset=utf8',
    'mentosu2', 'zvpg7916');
$sql2 = $pdo->prepare('SELECT * FROM korona_user where mail=? and password=?');
$sql2 -> execute([$_POST['login_id'],$_POST['login_pass']]);
$result2 = $sql->fetch();

if($result == true){
    unset($_SESSION['login_false']);
    $_SESSION["login_id"] = $_POST['login_id'];
    $_SESSION["login_pass"] = $_POST['login_pass'];
    header('Location: home.php');
}else if($result2 == true){
    unset($_SESSION['login_false']);
    $_SESSION["login_id"] = $_POST['login_id'];
    $_SESSION["login_pass"] = $_POST['login_pass'];
    header('Location: home.php');
}else{
    $_SESSION["login_false"] = 1;
    header('Location: login_input.php');
}
?>
</body>
</html>