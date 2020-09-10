<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php
    session_start();

    if (isset($_POST['twitter'])) {
        $twitter = $_POST['twitter_id'];
    }else{
        $twitter = null;
    }

    if (isset($_POST['instagram'])) {
        $instagram = $_POST['insta_id'];
    }else{
        $instagram = null;
    }

    if (isset($_POST['facebook'])) {
        $facebook = $_POST['face_id'];
    }else{
        $facebook = null;
    }

    $pdo = new PDO('mysql:host=mysql157.mentosu2.sakura.ne.jp;dbname=mentosu2_ogawa;charset=utf8','mentosu2','zvpg7916');
    $sql1 = $pdo -> prepare('SELECT * FROM profile');

    if ($sql1['user_name'] != $_POST['user_name']){
        $sql1 = $pdo -> prepare('UPDATE profile SET user_name = ? WHERE user_id = $');
        $sql1 -> execute([$_POST['user_name'], $_SESSION['login_id']]);
    }

    if ($sql1['birth'] != $_POST['birth']){
        $sql1 = $pdo -> prepare('UPDATE profile SET birth = ? WHERE user_id = $');
        $sql1 -> execute([$_POST['birth'], $_SESSION['login_id']]);
    }

    if ($sql1['syussin'] != $_POST['syussin']){
        $sql1 = $pdo -> prepare('UPDATE profile SET syussin = ? WHERE user_id = $');
        $sql1 -> execute([$_POST['syussin'], $_SESSION['login_id']]);
    }

    if ($sql1['job'] != $_POST['job']){
        $sql1 = $pdo -> prepare('UPDATE profile SET job = ? WHERE user_id = $');
        $sql1 -> execute([$_POST['job'], $_SESSION['login_id']]);
    }

    if ($sql1['hobby'] != $_POST['hobby']){
        $sql1 = $pdo -> prepare('UPDATE profile SET hobby = ? WHERE user_id = $');
        $sql1 -> execute([$_POST['hobby'], $_SESSION['login_id']]);
    }

    if ($sql1['tokugi'] != $_POST['tokugi']){
        $sql1 = $pdo -> prepare('UPDATE profile SET tokugi = ? WHERE user_id = $');
        $sql1 -> execute([$_POST['tokugi'], $_SESSION['login_id']]);
    }

    if ($sql1['myboom'] != $_POST['myboom']){
        $sql1 = $pdo -> prepare('UPDATE profile SET myboom = ? WHERE user_id = $');
        $sql1 -> execute([$_POST['myboom'], $_SESSION['login_id']]);
    }

    if ($sql1['love_singer'] != $_POST['love_singer']){
        $sql1 = $pdo -> prepare('UPDATE profile SET love_singer = ? WHERE user_id = $');
        $sql1 -> execute([$_POST['love_singer'], $_SESSION['login_id']]);
    }

    if ($sql1['now_get'] != $_POST['now_get']){
        $sql1 = $pdo -> prepare('UPDATE profile SET now_get = ? WHERE user_id = $');
        $sql1 -> execute([$_POST['now_get'], $_SESSION['login_id']]);
    }

    if ($sql1['comment'] != $_POST['comment']){
        $sql1 = $pdo -> prepare('UPDATE profile SET comment = ? WHERE user_id = $');
        $sql1 -> execute([$_POST['comment'], $_SESSION['login_id']]);
    }

    if ($sql1['twitter_id'] != $twitter){
        $sql1 = $pdo -> prepare('UPDATE profile SET twitter_id = ? WHERE user_id = $');
        $sql1 -> execute([$twitter, $_SESSION['login_id']]);
    }

    if ($sql1['insta_id'] != $instagram){
        $sql1 = $pdo -> prepare('UPDATE profile SET insta_id = ? WHERE user_id = $');
        $sql1 -> execute([$instagram, $_SESSION['login_id']]);
    }

    if ($sql1['face_id'] != $facebook){
        $sql1 = $pdo -> prepare('UPDATE profile SET face_id = ? WHERE user_id = $');
        $sql1 -> execute([$facebook, $_SESSION['login_id']]);
    }

    header('Location: "home.php"');

?>
</body>
</html>