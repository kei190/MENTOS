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

$sql = $pdo->prepare('SELECT * FROM profile where user_id=?');
$sql -> execute([$_SESSION['keiji_id']]);*/

?>
<div>
	<div>
        <p><img src="../gazou/<?php echo $_sql['gazou']?>.png" alt="の画像"></p>
        <p><?php /* echo $_SESSION["login_mail_id"]; */?>aaa</p>
    </div>
    <div>
        <p><?php /* echo $sql['user_name']; */?>bbb</p>
        <p><?php /* echo $sql['comment']; */?>ccc</p>
    </div>
</div>
<hr color="blue">
<div>
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
    <div>
    <button onclick="location.href='/MENTOS/yoshidomework/sinki/touroku.php'">kkk</button>
    <button onclick="location.href='/MENTOS/yoshidomework/sinki/touroku.php'">kkk</button>
    <button onclick="location.href='/MENTOS/yoshidomework/sinki/touroku.php'">kkk</button>
    <button onclick="location.href='/MENTOS/yoshidomework/sinki/touroku.php'">kkk</button>
    <button onclick="location.href='/MENTOS/yoshidomework/sinki/touroku.php'">kkk</button>
    </div>

</div>

</footer>

</body>
</html>