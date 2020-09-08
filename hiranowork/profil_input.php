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
        <p>　ユ　ー　ザ　名　　<input type="text"  name="user_name" style="width: 300px; height: 35px;" required="required"></p>
        <p>　生　年　月　日　　<input type="date" name="birth" style="width: 300px; height: 35px;" required="required"></p>
        <p>　　出　身　地　　　<input type="text" name="syussin" style="width: 300px; height: 35px;" required="required"></p>
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
        <p>　　　趣　味　　　　<input type="text" name="hobby" style="width: 300px; height: 35px;" required="required"></p>
        <p>　　　特　技　　　　<input type="text" name="tokugi" style="width: 300px; height: 35px;" required="required"></p>
        <p>最近はまっていること<input type="text" name="myboom" style="width: 300px; height: 35px;" required="required"></p>
        <p>好きなアーティスト　<input type="text" name="love_singer" style="width: 300px; height: 35px;" required="required"></p>
        <p>今　欲　し　い　物　<input type="text" name="now_get" style="width: 300px; height: 35px;" required="required"></p>
        <p><label style="margin-bottom: 10px">　　　一　言　　　　</label><textarea rows="5" cols="40" name="comment" required="required"></textarea></p>
        <p>連　絡　可　能　な　S　N　S</p>
        <p>　　　twitter　　　<input type="checkbox" name="twitter"><input type="text" name="twitter_id" style="width: 300px; height: 35px;"></p>
        <p>　　 Instagram　　<input type="checkbox" name="instagram"><input type="text" name="insta_id" style="width: 300px; height: 35px;"></p>
        <p>　　 Facebook 　　<input type="checkbox" name="facebook"><input type="text" name="face_id" style="width: 300px; height: 35px;"></p>
        <p>SNSのアカウントを持っていない場合は、どれか一つ新規登録をしてください。</p>
        <a href = "https://twitter.com/i/flow/signup">Twitter</a>
        <a href = "https://www.instagram.com/accounts/emailsignup/?hl=ja">Instagram</a>
        <a href = "https://www.facebook.com/campaign/landing.php?campaign_id=1665596389&extra_1=s%7Cc%7C321610682049%7Ce%7Cfacebook%7C&placement=&creative=321610682049&keyword=facebook&partner_id=googlesem&extra_2=campaignid%3D1665596389%26adgroupid%3D65075436220%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-541132862%26loc_physical_ms%3D1009717%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=Cj0KCQjw7sz6BRDYARIsAPHzrNIrt1BEuKWagvg_9syeRU_UsxwBTYL60c8qbORRUqPXwA1bwvLwzmoaAuk8EALw_wcB">Facebook</a>
        <p><input type="submit" value="完了" style="height: 40px; width: 80px; background-color: #A9D18E"></p>
	</form>
</div>
</body>
</html>