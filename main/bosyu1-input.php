<?php session_start();?>
<?php
$_SESSION['categoly']=$_POST['categoly'];
?>
<html>
	<head>
		<title>コロナで出会っちゃった!? てへっ☆</title>
		<link rel="stylesheet" href="css/bosyu1_input.css">
	</head>
	<body>
		<div class="main-title">
			<p>募集内容</p>
		</div>
		<div class="main">
			<form action="bosyu1-output.php" method="post">
				<div class="a">
    			<input type="text" name="title" placeholder="題名(必須)">
				</div>
    			<br>
    			<div class="b">
    			<textarea name="comment"placeholder="内容(必須）" cols="100" rows="20"></textarea >
    			</div>
    			<br>
    			<br>
    				<span class="c">開始時間(任意)</span>
    				<span class="d">終了時間(任意)</span>
    				<span class="h">掲載時間</span><br>
				<span class="e">
    				<input type="date" name="start">
    			</span>
    			<span class="f">~</span>
    			<span class="g">
    				<input type="date" name="end">
    			</span>
    			<span class="i">
    				<input type="time" name="keisai" placeholder="掲載時間">
    			</span>
    			<div class="j">
    				<input type="number" name="nin" placeholder="募集人数(任意)">
    			</div>
    			<div class="sns">
    			<p>連絡可能なSNSを選択</p>
        			<label><input type="checkbox" name="check" value="F">Facebook</label>
     				<label class="k"><input type="checkbox" name="check" value="I">Instagram</label>
      				<label class="k"><input type="checkbox" name="check" value="T">Twitter</label>
    			</div>
				<span class="l"><input type="submit" value="確認"style="padding:10px;font-size:20px;background-color:#C5E0B4;"></span>
			</form>
			<span><a href="bosyu1.php"><input type="submit" value="キャンセル"style="padding:10px;font-size:20px;background-color:#C5E0B4;"></a></span>
		</div>
	</body>
</html>