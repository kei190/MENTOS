<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>コロナで出会っちゃった!? てへっ☆</title>
</head>
<body>
<header style="height: 85px; margin-top: -17px;  background-color: #BDD35F;">
	<h3 style="text-align: right; padding-right: 80px; padding-top: 30px; height: 50px">
	コロナで出会っちゃった!? てへっ☆</h3>
</header>

<div style="text-align: center; padding-top: 40px">
	<form action="plofil_output,php" method="post">
        <h2 style="text-align: left; padding-left: 90px; padding-bottom: 25px">プロフィール作成</h2>
        <p>アイコン
        <?php
            $img=[
                'boy.png', 'girl.png','cat.png','penguin.png','usagi.png'
            ];

            foreach ($img AS $key){
                echo '<input type="radio" name="icon"><img src="', $key, '"  style="width: 100px; height: 100px">';
            }
        ?>
        </p>
        <p>　ユーザ名(必須)　　<input type="text"  name="user_name" style="width: 300px; height: 35px;" required="required"></p>
        <p>　生　年　月　日　　<input type="date" name="day" style="width: 300px; height: 35px;"></p>
        <p>　　出　身　地　　　<input type="text" name="from" style="width: 300px; height: 35px;"></p>
        <p>　　　職　業　　　　<select name="job" style="width: 310px; height: 43px;">
        	<option value="学生">学生</option>
        	<option value="大学生">大学生</option>
        	<option value="専門学生">専門学生</option>
        	<option value="会社員">会社員</option>
        	<option value="公務員">公務員</option>
        	<option value="自営業">自営業</option>
        	<option value="主婦">主婦</option>
        	<option value="無職">無職</option>
        	<option value="その他">その他</option>
        </select>
        </p>
        <p>　　　特　技　　　　<input type="text" name="goodat" style="width: 300px; height: 35px;" ></p>
        <p>最近はまっていること<input type="text" name="like" style="width: 300px; height: 35px;" ></p>
        <p>好きなアーティスト　<input type="text" name="singer" style="width: 300px; height: 35px;" ></p>
        <p>　　　趣　味　　　　<input type="text" name="hobby" style="width: 300px; height: 35px;" ></p>
        <p>今　欲　し　い　物　<input type="text" name="object" style="width: 300px; height: 35px;" ></p>
        <p>　　　一　言　　　　<textarea rows="5" cols="40" name="comment"></textarea></p>
        <p><input type="submit" value="作成" style="height: 40px; width: 80px;"></p>
	</form>
</div>
<footer style="height: 98px; margin-top: 30px;  background-color: #BDD35F;">

</footer>
</body>
</html>