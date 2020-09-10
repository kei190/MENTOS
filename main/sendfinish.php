<?php session_start();?>
<html>
<head>
<link rel="stylesheet" href="css/sendfinish.css">
<title>コロナで出会っちゃった!? てへっ☆</title>
</head>
<body>
<?php
if(!empty(start)){
    $_SESSION['start']=$_POST['start'];
}else{
    $_SESSION['start']=null;
}
if(!empty(end)){
    $_SESSION['end']=$_POST['end'];
}else{
    $_SESSION['end']=null;
}
if(!empty(nin)){
    $_SESSION['nin']=$_POST['nin'];
}else{
    $_SESSION['nin']=null;
}
$pdo=new PDO('mysql:host=mysql57.mentosu2.sakura.ne.jp;dbname=mentosu2_ogawa;charset=utf8','mentosu2','zvpg7916');
$sql=$pdo->prepare('insert into bosyu values(?,?,?,?,?,?,?,?,?,null)');
if($sql->execute($_SESSION['login_id'],$_POST['title'],$_POST['comment'],$_SESSION['start'],$_SESSION['end'],$_POST['keisai'],$_SESSION['nin'],$_SESSION['categoly'],$_SESSION['sns'])){
    echo '<p class="title">募集の完了</p>';
    echo '<p class="subtitle">募集に成功しました</p>';
    echo '<div class="a">
            <a href="home.php"><input type="submit" value="ホームへ戻る"style="padding:10px;font-size:20px;background-color:#C5E0B4;"></a>
            </div>';
}else{
    echo '<p class="title">募集の失敗</p>';
    echo '<p class="subtitle">募集に失敗しました</p>';
    echo'<div class="a">
            <a href="home.php"><input type="submit" value="ホームへ戻る"style="padding:10px;font-size:20px;background-color:#C5E0B4;"></a>
            </div>';
}
?>
</body>
</html>