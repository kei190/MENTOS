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

<div style="text-align: center; padding-top: 40px">
	<form action="plofil_update_output,php" method="post">
        <h2 style="text-align: left; padding-left: 90px; padding-bottom: 25px">プロフィール変更</h2>
        <?php
			echo 'あ';
            session_start();
            $pdo = new PDO('mysql:host=mysql157.mentosu2.sakura.ne.jp;dbname=mentosu2_ogawa;charset=utf8','mentosu2','zvpg7916');
            $sql2 = $pdo -> prepare('select * from profile where user_id = ?');
            $sql2 ->execute([$_SESSION['login_id']]);
            echo '<p>アイコン';

            $img=[
                'icon_chita_256.png', 'icon_man_256.png','icon_panda_256.png','icon_rady_256.png','icon_shikoutei_256.png','icon_syatyo_256.png'
            ];

            foreach ($img AS $key){
                if ($key == $sql2['icon']){
                    echo '<input type="radio" chacked="checked" name="icon"><img src= "img/', $key, '"  style="width: 100px; height: 100px">';
                }else{
                    echo '<input type="radio" name="icon"><img src= "img/', $key, '"  style="width: 100px; height: 100px">';
                }
            }

            echo '</p>';
            echo '<p>　ユ　ー　ザ　名　　<input type="text"  name="user_name" value="',$sql2['user_name'],'" style="width: 300px; height: 35px;" required="required"></p>';
            echo '<p>　生　年　月　日　　<input type="date" name="birth" value="',$sql2['birth'],'" style="width: 300px; height: 35px;" required="required"></p>';
            echo '<p>　　出　身　地　　　<input type="text" name="syussin" value="',$sql2['syussin'],'" style="width: 300px; height: 35px;" required="required"></p>';
            echo '<p>　　　職　業　　　　<select name="job" style="width: 310px; height: 43px;">';
            if ($sql2['job'] == '学生'){
                echo '<option value="学生" selected>学生</option>';
            }else{
                echo '<option value="学生">学生</option>';
            }

            if ($sql2['job'] == '大学生'){
                echo '<option value="大学生" selected>大学生</option>';
            }else{
                echo '<option value="大学生">大学生</option>';
            }

            if ($sql2['job'] == '専門学生'){
                echo '<option value="専門学生" selected>専門学生</option>';
            }else{
                echo '<option value="専門学生">専門学生</option>';
            }

            if ($sql2['job'] == '会社員'){
                echo '<option value="会社員" selected>会社員</option>';
            }else{
                echo '<option value="会社員">会社員</option>';
            }

            if ($sql2['job'] == '公務員'){
                echo '<option value="公務員" selected>公務員</option>';
            }else{
                echo '<option value="公務員">公務員</option>';
            }

            if ($sql2['job'] == '自営業'){
                echo '<option value="自営業" selected>自営業</option>';
            }else{
                echo '<option value="自営業">自営業</option>';
            }

            if ($sql2['job'] == '主婦'){
                echo '<option value="主婦" selected>主婦</option>';
            }else{
                echo '<option value="主婦">主婦</option>';
            }

            if ($sql2['job'] == '無職'){
                echo '<option value="無職" selected>無職</option>';
            }else{
                echo '<option value="無職">無職</option>';
            }

            if ($sql2['job'] == 'その他'){
                echo '<option value="その他" selected>その他</option>';
            }else{
                echo '<option value="その他">その他</option>';
            }

            echo '</select></p>';
            echo '<p>　　　趣　味　　　　<input type="text" name="hobby" value="',$sql2['hobby'],'" style="width: 300px; height: 35px;" required="required"></p>';
            echo '<p>　　　特　技　　　　<input type="text" name="tokugi" value="',$sql2['tokugi'],'" style="width: 300px; height: 35px;" required="required"></p>';
            echo '<p>最近はまっていること<input type="text" name="myboom" value="',$sql2['myboom'],'" style="width: 300px; height: 35px;" required="required"></p>';
            echo '<p>好きなアーティスト　<input type="text" name="love_singer" value="',$sql2['love_singer'],'" style="width: 300px; height: 35px;" required="required"></p>';
            echo '<p>今　欲　し　い　物　<input type="text" name="now_get" value="',$sql2['now_get'],'" style="width: 300px; height: 35px;" required="required"></p>';
            echo  '<p>　　　一　言　　　　<textarea rows="5" cols="40" name="comment" value="',$sql2['comment'],'" required="required"></textarea></p>';
            echo '<p>連　絡　可　能　な　S　N　S</p>';
            echo '<p>　　　twitter　　　<input type="checkbox" name="twitter"><input type="text" name="twitter_id" value="',$sql2['twitter_id'],'" style="width: 300px; height: 35px;"></p>';
            echo '<p>　　 Instagram　　<input type="checkbox" name="instagram"><input type="text" name="insta_id" value="',$sql2['insta_id'],'" style="width: 300px; height: 35px;"></p>';
            echo '<p>　　 Facebook 　　<input type="checkbox" name="facebook"><input type="text" name="face_id" value="',$sql2['face_id'],'" style="width: 300px; height: 35px;"></p>';
        ?>

        <p><input type="submit" value="作成" style="height: 40px; width: 80px; background-color: #A9D18E"></p>
	</form>
</div>
</body>
</html>