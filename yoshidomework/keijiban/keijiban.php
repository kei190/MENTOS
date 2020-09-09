<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>コロナで出会っちゃった!? てへっ☆</title>
</head>
<header align="center"><h1>コロナで出会っちゃった!? てへっ☆</h1></header>
<hr color="blue">
<body>
<h1>掲示板</h1>
<?php session_start();
/* $pdo = new PDO('mysql:host=mysql57.mentosu2.sakura.ne.jp;dbname=mentosu2_ogawa;charset=utf8',
    'mentosu2', 'zvpg7916');
$sql = $pdo->query('SELECT * FROM keiziban');
*/
foreach($sql as $row){
    echo "<a href="."keijiban_profile.php".">".$row['keizi_id']."</a>".":"."\n";
    echo $row['comment']."\n";
    echo "\n";
}

?>
<form action="keijiban_toukou.php" method="post">
<button onclick="location.href='/MENTOS/yoshidomework/sinki/home.php'">ホームに戻る</button>
<input type="submit" value="投稿する">
</form>
</body>
</html>