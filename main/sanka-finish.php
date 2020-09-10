<?php session_start();?>
<html>
<head>
<link rel="stylesheet" href="css/sendfinish.css">
<title>コロナで出会っちゃった!? てへっ☆</title>
</head>
<body>
<?php
$pdo=new PDO('mysql:host=mysql57.mentosu2.sakura.ne.jp;dbname=mentosu2_ogawa;charset=utf8','mentosu2','zvpg7916');
$sql=$pdo->prepare('insert into sanka values(?,?,?)');
if($sql->execute($_SESSION['userid'],$_POST['login_id'],$_POST['categoly'])){
    echo '<p class="title">参加の完了</p>';
    echo '<p class="subtitle">参加に成功しました</p>';
    echo '<div class="a">
            <a href="home.php"><input type="submit" value="ホームへ戻る"style="padding:10px;font-size:20px;background-color:#C5E0B4;"></a>
            </div>';
}else{
    echo '<p class="title">参加の失敗</p>';
    echo '<p class="subtitle">参加に失敗しました</p>';
    echo'<div class="a">
            <a href="home.php"><input type="submit" value="ホームへ戻る"style="padding:10px;font-size:20px;background-color:#C5E0B4;"></a>
            </div>';
}
?>
</body>
</html>
