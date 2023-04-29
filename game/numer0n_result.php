<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無題ドキュメント</title>
<link href="Numer0n.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
	$com_a = $_GET['com'];
	$com = $com_a/15-13;
	
		$com_one = $com%10;
	$com_ten = $com%100-$com_one;
	$com_mil = ($com - $com_ten - $com_one)/100;
	
	
	$mil = $_GET['mil'];
	$ten = $_GET['zilyu'];
	$one = $_GET['iti'];
	$you = $mil*100 + $ten*10 + $one;
	$challenge = $_GET['challenge']; 
	$result="";
	
	
	$eat = 0;
	$bite = 0;
	
	if($mil==$com_mil){
		$eat++;
	}else if($mil==$com_ten){
		$bite++;
	}else if($mil==$com_one){
		$bite++;
	}
	
	if($ten==$com_mil){
		$bite++;
	}else if($ten==$com_ten){
		$eat++;
	}else if($ten==$com_one){
		$bite++;
	}
	
	if($one==$com_mil){
		$bite++;
	}else if($one==$com_ten){
		$bite++;
	}else if($one==$com_one){
		$eat++;
	}
	
	if($bite==3){
		$result="clear";
	}else{
		$result="fail";
	}
	
	
	
	
	
	
	/*
	echo $mil;
	echo ":";
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
		<li><img src="../picture/number/<?php echo $mil; ?>.png" width="100" height="100" alt=""/></li>
		<li><img src="../picture/number/<?php echo $ten; ?>.png" width="100" height="100" alt=""/></li>
		<li><img src="../picture/number/<?php echo $one; ?>.png" width="100" height="100" alt=""/></li>
	</div>
	
	<div class="number">
	<li><img src="../picture/number/<?php echo $eat; ?>.png" width="100" height="100" alt=""/></li>
	<li><img src="../picture/number/eat.png" width="100" height="100" alt=""/></li>
	<li><img src="../picture/number/<?php echo $bite; ?>.png" width="100" height="100" alt=""/></li>
	<li><img src="../picture/number/bite.png" width="100" height="100" alt=""/></li>
		
	</div>
	
	
	
	
	<p>　</p>
	<p>　</p>
	
	<?php
	if($result=="clear"){ ?>
		<div class="Challenge">
		<form action="normal_end.php" method="get">
	
			<input type="hidden" name="result" value="<?php echo $result; ?>">
			<input type="hidden" name="mil" value="<?php echo $mil; ?>">
			<input type="hidden" name="ten" value=<?php echo $ten; ?>>
			<input type="hidden" name="one" value=<?php echo $one; ?>>
			<input type="hidden" name="rand" value=<?php echo $com_a; ?>>
			<input type="hidden" name="challenge" value=<?php echo $challenge ?>; >
		
			<input type="submit" value="次へ" class="botan">
	
		</form>
		</div>
		
	<?php } else { ?>
		<div class="normal_Challenge">
		<form action="normal.php" method="get">
			<input type="hidden" name="result" value="<?php echo $result; ?>">
			<input type="hidden" name="mil" value="<?php echo $mil; ?>">
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