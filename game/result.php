<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無題ドキュメント</title>
<link href="solt.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
	$com_a = $_GET['com'];
	$com = $com_a/15-13;
	
	$ten = $_GET['zilyu'];
	$one = $_GET['iti'];
	$you = $ten*10 + $one;
	$challenge = $_GET['challenge']; 
	$result="";
	
	/*
	echo $ten;
	echo ":";
	echo $one;
	echo":";
	echo $com;
	echo":";
	echo $challenge;
	*/
	?>
	
	<div class="number">
		<p>YOU</p>
		<li><img src="../picture/number/<?php echo $ten; ?>.png" width="100" height="100" alt=""/></li>
		<li><img src="../picture/number/<?php echo $one; ?>.png" width="100" height="100" alt=""/></li>
	</div>
	
	<p>　</p>
	
	<?php
	
	if($you==$com){ 
	?>	<div class="gazou">
			<img src="../picture/number/clear.png" width="300" height="100" alt=""/>
		</div>
	<?php $result="clear";
	}else if($you>$com){
	?>
		<div class="gazou">
			<img src="../picture/number/high.png" width="300" height="100" alt=""/>
		</div>
	<?php	$result="high";
	}else if($you<$com){
	?>  
		<div class="gazou">
			<img src="../picture/number/low.png" width="300" height="100" alt=""/>
		</div>
	<?php	$result="low";
	}
	
	?>
	
	<p>　</p>
	
	<?php
	if($result=="clear"){ ?>
		<div class="Challenge">
		<form action="end.php" method="get">
	
			<input type="hidden" name="result" value="<?php echo $result; ?>">
			<input type="hidden" name="ten" value=<?php echo $ten; ?>>
			<input type="hidden" name="one" value=<?php echo $one; ?>>
			<input type="hidden" name="rand" value=<?php echo $com_a; ?>>
			<input type="hidden" name="challenge" value=<?php echo $challenge ?>; >
		
			<input type="submit" value="次へ" class="botan">
	
		</form>
		</div>
		
	<?php } else { ?>
		<div class="Challenge">
		<form action="easy.php" method="get">
			<input type="hidden" name="result" value="<?php echo $result; ?>">
			<input type="hidden" name="ten" value=<?php echo $ten; ?>>
			<input type="hidden" name="one" value=<?php echo $one; ?>>
			<input type="hidden" name="rand" value=<?php echo $com_a; ?>>
			<input type="hidden" name="challenge" value=<?php echo $challenge ?>; >
		
			<input type="submit" value="次へ" class="botan">
	
		</form>
		</div>
	<?php } ?>
	

	
	
	
	
</body>
</html>