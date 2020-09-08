<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>コロナで出会っちゃった!? てへっ☆</title>
</head>
<body>
<h1>ログイン</h1>
<?php session_start();
if($_SESSION["login_false"] == 1){
    echo 'メールアドレスまたはユーザーID、パスワードが間違っています。'."\n";
    echo '入力をやり直してください。';
}
?>
<form action="login_output.php"method="post">
session_start();
<p><input type="text" name="login_mail_id" placeholder="メールアドレスまたはユーザーID"></p>
<p><input type="text" name="login_pass" placeholder="パスワード"></p>
<p><input type="button" onclick="location.href='/MENTOS/yoshidomework/sinki/touroku.php'" value="新規登録"></p>
<p><input type="submit" value="ログイン"></p>

</form>
</body>
</html>