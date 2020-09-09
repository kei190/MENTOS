<?php session_start();?>
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
			<form action="sendfinish.php" method="post">
				<div class="a">
    			<input type="text" name="title" value="<?php  echo $_POST['title'];?>" readonly>
				</div>
    			<br>
    			<div class="b">
    			<textarea name="comment"  cols="100" rows="20" readonly><?php  echo $_POST['comment'];?>
    			</textarea >
    			</div>
    			<br>
    			<br>
    				<span class="c">開始時間(任意)</span>
    				<span class="d">終了時間(任意)</span>
    				<span class="h">掲載時間</span><br>
				<span class="e">
    				<input type="date" name="start" value="<?php  echo $_POST['start'];?>" readonly>
    			</span>
    			<span class="f">~</span>
    			<span class="g">
    				<input type="date" name="end" value="<?php  echo $_POST['end'];?>" readonly>
    			</span>
    			<span class="i">
    				<input type="time" name="keisai" value="<?php  echo $_POST['keisai'];?>" readonly>
    			</span>
    			<div class="j">
    				<input type="number" name="nin" value="<?php  echo $_POST['nin'];?>" readonly  placeholder="募集人数(任意)">
    			</div>

    			<div class="sns">
    			<p>連絡可能なSNSを選択</p>
    			<?php
    			$sns='';
    			foreach($_POST['check'] as $val){
    			    if($val== "F"){
    			        echo '<label><input type="checkbox" name="check[]" value="F" checked>Facebook</label>';
    			        $a = $val;
    			        $sns .= $a;
    			    }
    			    if($val== "I"){
    			        echo '<label class="k"><input type="checkbox" name="check[]" value="I" checked>Instagram</label>';
    			        $b = $val;
    			        $sns .= $b;
    			    }
    			    if($val== "T"){
    			        echo '<label class="k"><input type="checkbox" name="check[]" value="T" checked>Twitter</label>';
    			        $c = $val;
    			        $sns .= $c;
    			    }
    			}
    			$_SESSION['sns']=$sns;
    			?>
    			</div>
				<span class="l"><input type="submit" value="申し込み"style="padding:10px;font-size:20px;background-color:#C5E0B4;"></span>
			</form>
			<span><a href="bosyu1_input.php"><input type="submit" value="キャンセル"style="padding:10px;font-size:20px;background-color:#C5E0B4;"></a></span>
		</div>
	</body>
</html>