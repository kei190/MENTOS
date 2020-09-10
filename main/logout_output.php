<!DOCTYPE html>
<html>
<head>
<link href = "logout.css" rel = "stylesheet">
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body class="out">
<div class = "center">
<?php
session_start();
unset($_SESSION['login_id']);
echo 'ログアウトしました<br>';
echo '<a href = "login_input.php">ログイン画面に戻る</a>';
?>
</div>
</body>
</html>