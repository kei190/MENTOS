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
$i=0;
/* $pdo = new PDO('mysql:host=mysql57.mentosu2.sakura.ne.jp;dbname=mentosu2_ogawa;charset=utf8',
    'mentosu2', 'zvpg7916');
*/
$pdo = new PDO('mysql:host=localhost;dbname=shop;charset=utf8',
'staff', 'password');
$sql = $pdo->query('SELECT * FROM keiziban');

foreach($sql as $row){
    $i+=1;
    echo "<a href="."keijiban_profile.php".">".$row['keizi_no']."</a>".":".""."<br>";
    echo $row['comment']."<br>";
?>
    <form action="/MENTOS/yoshidomework/keijiban/home2.php" method="post">
    <input type="hidden" name="name" value="<?php echo $row['keizi_no']; ?>">
    <input type="submit" value="プロフィールへ">
    </form>
   <?php echo "<br>";
}

?>

<form action="keijiban_toukou.php" method="post">
<input type ="button" onclick="location.href='/MENTOS/yoshidomework/home/home.php'" value="ホームに戻る">
<input type="submit" value="投稿する">
</form>
</body>
</html>