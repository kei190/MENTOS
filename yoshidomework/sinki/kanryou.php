<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>コロナで出会っちゃった!? てへっ☆</title>
<link href="kanryou.css" rel="stylesheet">
</head>
<body>
<form action="profil_input.php" method="post">
<?php
session_start();
/* $pdo = new PDO('mysql:host=mysql57.mentosu2.sakura.ne.jp;dbname=mentosu2_ogawa;charset=utf8',
    'mentosu2', 'zvpg7916');
*/
$pdo = new PDO('mysql:host=localhost;dbname=shop;charset=utf8',
'staff', 'password');
$sql = $pdo->prepare('INSERT INTO korona_user VALUES(?,?,?)');
$sql -> execute([$_SESSION['sinki_id'],$_SESSION['sinki_mail'],$_SESSION['sinki_pass']]);
?>
<h1>登録完了</h1>
<p>登録が完了しました。</p>
<p><input type="submit" value="プロフィール作成へ"> </p>
</form>
</body>
</html>
