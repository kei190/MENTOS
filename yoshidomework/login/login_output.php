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
$sql = $pdo->prepare('SELECT * FROM korona_user where (user_id=? or mail=?) and password=?');
$sql -> execute([$_POST['login_mail_id'],$_POST['login_mail_id'],$_POST['login_pass']]);
$result = $sql->fetch();
if($result){
    unset($_SESSION['login_false']);
    $_SESSION["login_mail_id"] = $_POST['login_mail_id'];
    $_SESSION["login_pass"] = $_POST['login_pass'];
    header('Location: home.php');
}else{
    $_SESSION["login_false"] = 1;
    header('Location: login_input.php');
}
?>
</body>
</html>