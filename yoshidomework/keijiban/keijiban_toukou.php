<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>コロナで出会っちゃった!? てへっ☆</title>
</head>
<header align="center"><h1>コロナで出会っちゃった!? てへっ☆</h1></header>
<hr color="blue">
<body>
<?php session_start();?>
<form action="keijiban_toukou_output.php"method="post">
<h1>掲示板</h1>
<p><input type="text" value="<?php echo $_SESSION['login_id'];?>" readonly></p>
<p><textarea name="toukou" cols="80" rows="10" placeholder="内容"></textarea></p>
<button onclick="location.href='/MENTOS/yoshidomework/keijiban/keijiban.php'">キャンセル</button>
<input type="submit" value="投稿する">
</form>
</body>
</html>