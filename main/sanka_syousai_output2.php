<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>コロナで出会っちゃった!? てへっ☆</title>
</head>
<body>
    <header style="height: 85px; margin-top: -17px;  background-color: #BDD35F;">
    	<h3 style="text-align: center; padding-right: 80px; padding-top: 30px; height: 50px">
    	コロナで出会っちゃった!? てへっ☆</h3>
    </header>
	<h2 style="padding-left: 90px">参加予定</h2>
	<form action="sanka_syousai_output3.php" method="post">
	<div>
		<?php
    		session_start();
            $pdo = new PDO('mysql:host=mysql157.mentosu2.sakura.ne.jp;dbname=mentosu2_ogawa;charset=utf8','mentosu2','zvpg7916');
            $sql2 = $pdo -> prepare('select tema, start_time, end_time from bosyu, sanka where ? = sanksuser_id && user_id = bosyuuser_id && bosyu.categoly_id = sanka.categoly_id');
            $sql2 ->execute([$_SESSION['login_id']]);
            echo '<table style="text-align: center;">';
            echo '<tr>';
            echo '<th>題名</th>';
            echo '<th>開始時間</th>';
            echo '<th>終了時間</th>';
            echo '</tr>';

            foreach ($sql2 as $row){
                echo '<tr>';
                echo '<td><a href = "sanka_syousai_output3.php" style = "text-decoration:none;"><input type="hidden" name="tema">',$row['tema'],'</a></td>';
                echo '<td>',$row['start_time'],'</td>';
                echo '<td>',$row['end_time'],'</td>';
                echo '</tr>';
            }
		?>

	</div>
	</form>
	<p style="text-align: center; padding-top: 200px"><input type="submit" value="ホームに戻る" style="height: 50px; width: 150px; background-color: #A9D18E"></p>
</body>
</html>