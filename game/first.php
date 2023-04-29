<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無題ドキュメント</title>
<link href="solt.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="title">
		<img src="../picture/number/title.png" width="800" height="400">
	</div>
		<p class="mozi">難易度設定</p>
	
	<ul class="nannido">
	<li><form action="easy.php" method="get" >
		<input type="submit" value="Easy" class="botan">
		<input type="hidden" name="rand" value=<?php echo (rand(10,99)+13)*15; ?> >
	</form></li>
		
	<li><form action="normal.php" method="get">
		<input type="submit" value="Normal" class="botan">
		<input type="hidden" name="rand" value=<?php echo (rand(100, 999)+13)*15; ?> >
	</form></li>
	
	<li><form action="hard.php" method="get">
		<input type="submit" value="Hard" class="botan">
		<input type="hidden" name="rand" value=<?php echo (rand(1000, 9999)+13)*15; ?> >
		</form></li>
	
	</ul>
		
</body>
</html>