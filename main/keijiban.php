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
*/
$pdo = new PDO('mysql:host=localhost;dbname=shop;charset=utf8',
'staff', 'password');
$sql = $pdo->query('SELECT * FROM keiziban');
$i = 0;
foreach($sql as $row){?>


    <form action="home2.php" method="post" name="form1">
        <input type="hidden" name="id" value="<?php echo $row['keizi_no']; ?>">
            <a href = "javascript:form1[<?php echo $i?>].submit()"><?php echo $row['keizi_no'] ?></a><br>
             <?php echo $row['comment'] ?><br>
            </form>



<?php echo "<br>";
$i++;
}?>

<form action="keijiban_toukou.php" method="post">
<input type ="button" onclick="location.href='/MENTOS/yoshidomework/home/home.php'" value="ホームに戻る">
<input type="submit" value="投稿する">
</form>
</body>
</html>