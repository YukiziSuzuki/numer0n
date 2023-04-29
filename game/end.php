<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無題ドキュメント</title>
<link href="solt.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="gazou">
		<img src="../picture/number/clear.png" width="500" height="200" alt=""/>
	</div>
	
	<div class="number">
	<?php
		$ten = $_GET['ten'];
		$one = $_GET['one']; ?> 
		<li><img src="../picture/number/<?php echo $ten; ?>.png" width="100" height="100" alt=""/></li>
		<li><img src="../picture/number/<?php echo $one; ?>.png" width="100" height="100" alt=""/></li>
	</div>
	
	
	<?php $challenge = $_GET['challenge']; ?>
	
	<p class="scoa">スコア：
	<?php
	echo 1500-(int)$challenge*100;
	?>
	</p>
	
	<div class="return">
	<form action="first.php" method="get">
		<input type="submit" value="タイトルへ" class="botan">
	</form>
	</div>
	
</body>
</html>