<?php require 'header.html';?>
<html>
<head>
<link href = "search.css" rel = "stylesheet">
<link href = "footer.css" rel = "stylesheet">
</head>
<body>
<form action = "search_output.php" method = "post">
<div>
<p>ユーザIDを入力してください。</p>
</div>
<div class = "search">
	<input type = "text" name = "search" style = "width: 300px; height:30px;">
	<br><br>
	<button type = "submit">検索</button>
</div>
</form>
</body>
</html>
<?php require 'footer.html'; ?>
