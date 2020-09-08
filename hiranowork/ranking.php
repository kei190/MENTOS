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
<div>
	<h2 style="text-align: center">カテゴリーランキング</h2>
</div>
<div style="text-align: center">
<?php
    $pdo = new PDO('mysql:host=mysql157.mentosu2.sakura.ne.jp;dbname=mentosu2_ogawa;charset=utf8','mentosu2','zvpg7916');
    $count1 = 0;
    $count2 = 0;
    $count3 = 0;
    $count4 = 0;
    $count5 = 0;
    $count6 = 0;
    $count7 = 0;
    $count8 = 0;
    $count9 = 0;
    $count10 = 0;
    $count11 = 0;
    $count12 = 0;
    $count13 = 0;
    $count14 = 0;
    $count15 = 0;
    $count16 = 0;
    $count17 = 0;
    $count18 = 0;
    $count19 = 0;
    $count20 = 0;
    $sql3 = $pdo -> prepare('select * from categoly');
    foreach ($sql3 as $row){
        if ($row['category_mei'] == "本"){
            $count1++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "映画"){
            $count2++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "教育"){
            $count3++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "カメラ"){
            $count4++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "音楽"){
            $count5++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "動物"){
            $count6++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "スポーツ・運動"){
            $count7++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "ゲーム"){
            $count8++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "料理"){
            $count9++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "DIY"){
            $count10++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "アニメ・漫画"){
            $count11++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "ファッション"){
            $count12++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "メイク"){
            $count13++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "ブログ・アフィリエイト"){
            $count14++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "ネットオークション"){
            $count15++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "株"){
            $count16++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "イラスト・デザイン作成"){
            $count17++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "開発"){
            $count18++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "歴史"){
            $count19++;
        }
    }

    foreach ($sql3 as $row){
        if ($row['category_mei'] == "その他"){
            $count20++;
        }
    }

    $arry = [];

    $arry[]=['name' => '本', 'point' => $count1];
    $arry[]=['name' => '映画', 'point' => $count2];
    $arry[]=['name' => '教育', 'point' => $count3];
    $arry[]=['name' => 'カメラ', 'point' => $count4];
    $arry[]=['name' => '音楽', 'point' => $count5];
    $arry[]=['name' => '動物', 'point' => $count6];
    $arry[]=['name' => 'スポーツ・運動', 'point' => $count7];
    $arry[]=['name' => 'ゲーム', 'point' => $count8];
    $arry[]=['name' => '料理', 'point' => $count9];
    $arry[]=['name' => 'DIY', 'point' => $count10];
    $arry[]=['name' => 'アニメ・漫画', 'point' => $count11];
    $arry[]=['name' => 'ファッション', 'point' => $count12];
    $arry[]=['name' => 'メイク', 'point' => $count13];
    $arry[]=['name' => 'ブログ・アフィリエイト', 'point' => $count14];
    $arry[]=['name' => 'ネットオークション', 'point' => $count15];
    $arry[]=['name' => '株', 'point' => $count16];
    $arry[]=['name' => 'イラスト・デザイン作成', 'point' => $count17];
    $arry[]=['name' => '開発', 'point' => $count18];
    $arry[]=['name' => '歴史', 'point' => $count19];
    $arry[]=['name' => 'その他', 'point' => $count20];

    $arySort=[];

    foreach ($arry as $key => $value){
        $arySort[$key] = $value['point'];
    }

    arry_multisort($arySort, SORT_DESC, $arry);

    echo '<table>';
    echo '<tr><th>順位</th><th>カテゴリー名</th></tr>';

    for ($i = 1; $i <= 10; $i++){
        echo '<tr>';
        echo '<td>', $i, "位", '<td>';
        echo '<td>', $value['name'], '</td>';
    };
    echo '</table>';
?>
</div>
</body>
</html>