<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>終了画面</title>
<link href="Numer0n.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="gazou">
		<img src="../picture/number/clear.png" width="500" height="200" alt=""/>
	</div>
	
	<div class="number">
	<?php  //正解の数字を表示している
		$mil = $_GET['mil'];
		$ten = $_GET['ten'];
		$one = $_GET['one']; ?>
		<li><img src="../picture/number/<?php echo $mil; ?>.png" width="150" height="150" alt=""/></li>
		<li><img src="../picture/number/<?php echo $ten; ?>.png" width="150" height="150" alt=""/></li>
		<li><img src="../picture/number/<?php echo $one; ?>.png" width="150" height="150" alt=""/></li>
	</div>
	
	
	<?php $challenge = $_GET['challenge']; ?>
	
	<p class="scoa">スコア：
	<?php  //試行回数、及びヒントの使用に応じてスコアを表示している。
	echo 4000-(int)$challenge*100;
	?>
	</p>
	
	<div class="return">
	<form action="numer0n_first.php" method="get">
		<input type="submit" value="タイトルへ" class="botan">
	</form>
	</div>
	
	
	
</body>
</html>