<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>コロナで出会っちゃった!? てへっ☆</title>
</head>
<body>
<?php session_start();
/* $pdo = new PDO('mysql:host=mysql57.mentosu2.sakura.ne.jp;dbname=mentosu2_ogawa;charset=utf8',
 'mentosu2', 'zvpg7916');
 $sql = $pdo->query('SELECT * FROM keiziban');
 */
$_SESSION['keiji_id'] = $sql['keizi_id'];
header('Location: home.php');
?>
</body>
</html>