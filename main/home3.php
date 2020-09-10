<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>コロナで出会っちゃった!? てへっ☆</title>

<link href="home.css" rel="stylesheet">
</head>
<header align="center"><h1>コロナで出会っちゃった!? てへっ☆</h1></header>
<hr color="blue">
<body>
<?php session_start();
/* $pdo = new PDO('mysql:host=mysql57.mentosu2.sakura.ne.jp;dbname=mentosu2_ogawa;charset=utf8',
    'mentosu2', 'zvpg7916');
*/
$pdo = new PDO('mysql:host=localhost;dbname=shop;charset=utf8',
'staff', 'password');
$sql2 = $pdo->prepare('SELECT * FROM profile where user_id=?');
$sql2 -> execute([$_POST["user_search"]]);

?>
<?php foreach($sql2 as $sql){?>
<div>
	<div>
        <p><img src="../gazou/<?php echo $_sql['icon']?>.png" alt="アイコンの画像"></p>
        <p><?php echo $_SESSION["login_id"]; ?></p>
    </div>
    <div>
        <p><?php echo $sql['user_name']; ?></p>
        <p><?php echo $sql['comment']; ?></p>
    </div>
</div>
<hr color="blue">
<div>

    <div>
        <p>生年月日<br>
        <input type="text" value="<?php echo $sql['birth'];?>" readonly></p>
        <p>職業<br>
            <input type="text" value="<?php echo $sql['job'];?>" readonly></p>
        <p>出身地<br>
            <input type="text" value="<?php echo $sql['syussin'];?>" readonly></p>
        <p>趣味<br>
        	<textarea name="hobby" cols="60" rows="5" readonly><?php echo $sql['hobby'];?></textarea></p>
    </div>
    <div>
        <p>特技<br>
        <textarea name="tokugi" cols="60" rows="5" readonly><?php echo $sql['tokugi'];?></textarea></p>
        <p>最近ハマっていること<br>
        <textarea name="myboom" cols="60" rows="5" readonly><?php echo $sql['myboom'];?></textarea></p>
        <p>好きなアーティスト<br>
            <textarea name="love_singer" cols="60" rows="5" readonly><?php echo $sql['love_singer'];?></textarea></p>
        <p>今欲しい物<br>
        	<textarea name="now_get" cols="60" rows="5" readonly><?php echo $sql['now_get'];?></textarea></p>
    </div>
</div>
<footer>
<div>
</div>

</footer>
<?php }?>
</body>
</html>