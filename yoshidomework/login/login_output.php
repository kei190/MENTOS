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
$sql = $pdo->prepare('SELECT * FROM korona_user where (user_id=? or mail=?) and password=?');
$sql -> execute([$_POST['login_mail_id'],$_POST['login_mail_id'],$_POST['login_pass']]);
$result = $sql->fetch();

/* $pdo = new PDO('mysql:host=localhost;dbname=shop;charset=utf8',
    'staff', 'password');
 $sql2 = $pdo->prepare('SELECT * FROM korona_user where mail=? and password=?');
$sql2 -> execute([$_POST['login_mail_id'],$_POST['login_pass']]);
$result2 = $sql->fetch();*/
$sql2 = $pdo->prepare('SELECT * FROM korona_user where mail=? and password=?');
$sql2 -> execute([$_POST['login_mail_id'],$_POST['login_pass']]);
foreach($sql2 as $row){
    $mail = $row['mail'];
    $id = $row['user_id'];
}

if($result == true){
    if($_POST['login_mail_id'] == $mail){
        unset($_SESSION['login_false']);
        $_SESSION["login_id"] = $id;
        $_SESSION["login_pass"] = $_POST['login_pass'];
        header('Location: /MENTOS/yoshidomework/home/home.php');
    }else{
    unset($_SESSION['login_false']);
    $_SESSION["login_id"] = $_POST['login_mail_id'];
    $_SESSION["login_pass"] = $_POST['login_pass'];
    header('Location: /MENTOS/yoshidomework/home/home.php');
    }
}else{
    $_SESSION["login_false"] = 1;
    header('Location: login_input.php');
}
?>
</body>
</html>