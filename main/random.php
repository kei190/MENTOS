<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php
    $pdo = new PDO('mysql:host=mysql157.mentosu2.sakura.ne.jp;dbname=mentosu2_ogawa;charset=utf8','mentosu2','zvpg7916');
    $count = $pdo -> prepare('select COUNT(*) from bosyu');
    $rand = rand(1,$count);
    $sql5 = $pdo -> prepare('select * from bosyu where id = ?');
    $sql5 ->execute([$rand]);
    foreach($sql5 as $row){
?>
 <form action="sendmiddole.php" method="post">
           <div class="a">
           <input type="text" name="name" value=<?php  echo $row['user_id'];?> readonly>
           <input type="text" name="title" value=<?php  echo $row['tema'];?> readonly>
           </div>
            <div class="b">
            	<textarea name="comment"  cols="100" rows="20" readonly><?php  echo $row['naiyou'];?>
        		</textarea >
        	</div>
        		<br>
        		<br>
        	<span class="c">開始時間(任意)</span>
        	<span class="d">終了時間(任意)</span>
        	<span class="h">掲載時間</span><br>
    				<span class="e">
        				<input type="date" name="start" value="<?php  echo $row['start_time'];?>" readonly>
        			</span>
        			<span class="f">~</span>
        			<span class="g">
        				<input type="date" name="end" value="<?php  echo $row['end_time'];?>" readonly>
        			</span>
        			<span class="i">
        				<input type="time" name="keisai" value="<?php  echo $row['keisai_time'];?>" readonly>
        			</span>
        			<div class="j">
        				<input type="number" name="nin" value="<?php  echo $row['ninzu'];?>" readonly  placeholder="募集人数(任意)">
        			</div>

        			<div class="sns">
        			<p>連絡可能なSNS</p>
        			<?php
        			$a=$row['sns'];
        			    if(strstr($a,'F')){
        			        echo '<label><input type="checkbox" name="check[]" value="F" checked>Facebook</label>';
        			    }
        			    if(strstr($a,'I')){
        			        echo '<label class="k"><input type="checkbox" name="check[]" value="I" checked>Instagram</label>';
        			    }
        			    if(strstr($a,'T')){
        			        echo '<label class="k"><input type="checkbox" name="check[]" value="T" checked>Twitter</label>';
        			    }
        			?>
        			</div>
    				<span class="l"><input type="submit" value="詳細を見る"style="padding:10px;font-size:20px;background-color:#C5E0B4;"></span>
    			</form>

    		<?php
                }
    ?>

</body>
</html>