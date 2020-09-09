<?php session_start();?>
<html>
	<head>
 		<title>コロナで出会っちゃった!? てへっ☆</title>
		<link rel="stylesheet" href="css/bosyu1.css">
	</head>
	<body>
		<div class="main-title">
			<p>参加検索</p>
		</div>
		<div class="sub-title">
			<p>参加したいカテゴリーを選択</p>
		</div>
		<div class="main">
			<form action="sanka-input.php" method="post">
				<div class="choice">
                    <p><input type="radio" name="categoly" value="本" checked>本</p>
                    <p><input type="radio" name="categoly" value="映画">映画</p>
                    <p><input type="radio" name="categoly" value="教育">教育</p>
                    <p><input type="radio" name="categoly" value="カメラ">カメラ</p>
                    <p><input type="radio" name="categoly" value="音楽">音楽</p>
                    <p><input type="radio" name="categoly" value="動物">動物</p>
                    <p><input type="radio" name="categoly" value="スポーツ・運動">スポーツ・運動</p>
                    <p><input type="radio" name="categoly" value="ゲーム">ゲーム</p>
                    <p><input type="radio" name="categoly" value="料理">料理</p>
                    <p><input type="radio" name="categoly" value="DIY">DIY</p>
                    <p><input type="radio" name="categoly" value="アニメ・漫画">アニメ・漫画</p>
                    <p><input type="radio" name="categoly" value="ファッション">ファッション</p>
                    <p><input type="radio" name="categoly" value="メイク">メイク</p>
                    <p><input type="radio" name="categoly" value="ブログ・アフィリエイト">ブログ・アフィリエイト</p>
                    <p><input type="radio" name="categoly" value="ネットオークション">ネットオークション</p>
                    <p><input type="radio" name="categoly" value="株">株</p>
                    <p><input type="radio" name="categoly" value="イラスト・デザイン作成">イラスト・デザイン作成</p>
                    <p><input type="radio" name="categoly" value="アプリ開発">アプリ開発</p>
                    <p><input type="radio" name="categoly" value="その他">その他</p>
				</div>
				<div class="button">
    				<div class="button1">
    					<p><a href="#" ><input type="submit" value="キャンセル" style="padding:10px;font-size:20px;"></a></p>
    				</div>
    				<div class="button2">
    				 	<p><input type="submit" value="次へ" style="padding:10px;font-size:20px;"></p>
    				</div>
				</div>
			</form>
		</div>
	</body>
</html>