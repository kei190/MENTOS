<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>コロナで出会っちゃった!? てへっ☆</title>
</head>
<body>
<form action="kanryou.php" method="post">
<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=shop;charset=utf8',
    'staff', 'password');
$sql = $pdo->prepare('SELECT * FROM coustomer where name=?');
$sql -> execute([$_POST["sinkimail"]]);
$result = $sql->fetch();
if($result == false){
?>
    <h1>新規会員登録確認</h1>
    <p>以下でよろしいですか？</p>
    <p>メールアドレス</p>
    <?php
    echo $_POST['sinkimail'];
    $_SESSION["sinkimail"] = $_POST['sinkimail'];
    ?>
    <p>パスワード</p>
    <?php
    echo $_POST['sinkipass'];
    $_SESSION["sinkipass"] = $_POST['sinkipass'];
    ?>
    <p><input type="button" onclick="location.href='/MENTOS/yoshidomework/sinki/touroku.php'"  value="変更"> <input type="submit" value="登録"></p>
<?php
}else {
    echo '<h1>'.'登録失敗'.'</h1>';
    echo '<p>'.'登録に失敗しました。このアカウントは既に存在しています。'."\n".'別のメールアドレスを使用してください'.'</p>';
    ?>
    <p><input type="button" onclick="location.href='/MENTOS/yoshidomework/sinki/touroku.php'"  value="戻る">
<?php
}
?>

</form>
</body>
</html>