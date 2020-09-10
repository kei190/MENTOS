<?php session_start();?>
<html>
<head>
</head>
<body>
<?php $_SESSION['userid'] = $_POST['name'];
header('Location:sanka-output.php');
?>
</body>
</html>