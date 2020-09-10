
<?php
    session_start();
    header('Location: bosyu1.php');


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
    $sql1 = $pdo -> prepare('INSERT INTO profile VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

    if (empty($sql1 ->fetchAll())) {
        if ($sql1 -> execute([$_POST['user_name'], $_POST['icon'], $_POST['birth'], $_POST['syussin'], $_POST['job'], $_POST['hobby'], $_POST['tokugi'], $_POST['myboom'], $_POST['love_singer'], $_POST['now_get'], $_POST['comment'], $twitter, $instagram, $facebook, $_SESSION['login_id']])) {
            header('Location: home.php');
        };
    }
?>