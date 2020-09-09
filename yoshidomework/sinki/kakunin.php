<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>コロナで出会っちゃった!? てへっ☆</title>
<link href="kakunin.css" rel="stylesheet">
</head>
<body>
<form action="kanryou.php" method="post">
<?php
session_start();
$pdo = new PDO('mysql:host=mysql57.mentosu2.sakura.ne.jp;dbname=mentosu2_ogawa;charset=utf8',
    'mentosu2', 'zvpg7916');
$sql = $pdo->prepare('SELECT * FROM korona_user where mail=?');
$sql -> execute([$_POST["sinki_mail"]]);
$result = $sql->fetch();

$sql2 = $pdo->prepare('SELECT * FROM korona_user where user_id=?');
$sql2 -> execute([$_POST["sinki_id"]]);
$result2 = $sql2->fetch();
if($result == false && $result2 == false){
?>
    <h1>新規会員登録確認</h1>
    <p>以下でよろしいですか？</p>
    <p>メールアドレス</p>
    <?php
    echo $_POST['sinki_mail'];
    $_SESSION['sinki_mail'] = $_POST['sinki_mail'];
    ?>
    <p>パスワード</p>
    <?php
    echo $_POST['sinki_pass'];
    $_SESSION['sinki_pass'] = $_POST['sinki_mail'];
    ?>
    <p>ユーザーID</p>
    <?php
    echo $_POST['sinki_id'];
    $_SESSION['sinki_id'] = $_POST['sinki_mail'];
    ?>
    <p><input type="button" onclick="location.href='/MENTOS/yoshidomework/sinki/touroku.php'"  value="変更"> <input type="submit" value="登録"></p>
<?php
}else {
    echo '<h1>'.'登録失敗'.'</h1>';
    echo '<p>'.'登録に失敗しました。このアカウントは既に存在しています。'."\n".'別のメールアドレスまたはユーザーIDを使用してください'.'</p>';
    ?>
    <p><input type="button" onclick="location.href='/MENTOS/yoshidomework/sinki/touroku.php'"  value="戻る">
<?php
}
?>

</form>
</body>
</html>