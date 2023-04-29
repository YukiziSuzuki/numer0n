<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無題ドキュメント</title>
</head>

<body>
	
	<h1>Numer0n</h1>
	
	<?php
	$com=0;
	$one = rand(0,9);
	$com = $one;
	
	while(1){
		$ten = rand(0,9);
		if($ten != $one){
			$com = $ten*10 + $one;
			break;
		}
	}
	
	while(1){
		$mil = rand(0,9);
		if($mil != $ten && $mil != $one){
			$com = $mil*100 + $ten*10 + $one;
			break;
		}
	}
	
	echo $com;
	
	?>
	
	
	
	
	<form action="game.php" method="get">
		
		<input type="submit" value="スタート" class="botan">
		<input type="hidden" name="com" value=<?php echo ($com+13)*15; ?> >
		
	</form>
	
</body>
</html>