<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>リザルト画面</title>
<link href="Numer0n.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
	//コンピュータとプレイヤーの数字を取得し、それぞれの位に分ける
	$com_a = $_GET['com'];
	$com = $com_a/15-13;
	
	$com_one = $com%10;
	$com_ten = ($com%100-$com_one)/10;
	$com_mil = ($com - $com_ten*10 - $com_one)/100;
	
	$mil = $_GET['mil'];
	$ten = $_GET['zilyu'];
	$one = $_GET['iti'];
	$you = $mil*100 + $ten*10 + $one;
	$challenge = $_GET['challenge']; 
	$result="";
	
	//ヒントの使用状況
	$flag1 = $_GET['flag1'];
	$flag2 = $_GET['flag2'];
	
	//プレイヤーの数字がどれだけあっているのかを判定を行っている
	//eatが数字も桁数もあっている場合、biteが桁数が違うが数字があっている場合である
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
	
	//確認用
	/*
	echo $com_mil;
	echo ":";
	echo $com_ten;
	echo ":";
	echo $com_one;
	echo":";
	echo $com;
	echo":";
	echo $challenge;
	
	echo ":";
	
	echo $mil;
	echo ":";
	echo $ten;
	echo ":";
	echo $one;
	echo":";
	echo $you;
	echo":";
	echo $challenge;
	*/
	?>
	<?php //プレイヤーの入力した数字を表示 ?>
	<div class="number">
		<p>YOU</p>
		<li><img src="../picture/number/<?php echo $mil; ?>.png" width="100" height="100" alt=""/></li>
		<li><img src="../picture/number/<?php echo $ten; ?>.png" width="100" height="100" alt=""/></li>
		<li><img src="../picture/number/<?php echo $one; ?>.png" width="100" height="100" alt=""/></li>
	</div>
	
	<p>　　</p>
	<?php //コールした数字の結果を表示 ?>
	<div class="eat_bite">
	<li><img src="../picture/number/<?php echo $eat; ?>.png" width="100" height="100" alt=""/></li>
	<li><img src="../picture/number/eat.png" width="200" height="100" alt=""/></li>
	<li><img src="../picture/number/<?php echo $bite; ?>.png" width="100" height="100" alt=""/></li>
	<li><img src="../picture/number/bite.png" width="200" height="100" alt=""/></li>
	</div>
	
	
	
	
	<p>　</p>
	<p>　</p>
	
	<?php
	//数字がすべて合っていた場合、リザルト画面へと移動して、そうでない場合は前の画面に戻る。
	
	if($eat==3){ ?>
		<div class="Challenge">
		<form action="numer0n_end.php" method="get">
	
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
		<div class="Challenge">
		<form action="numer0n.php" method="get">
			<input type="hidden" name="mil" value="<?php echo $mil; ?>">
			<input type="hidden" name="ten" value=<?php echo $ten; ?>>
			<input type="hidden" name="one" value=<?php echo $one; ?>>
			<input type="hidden" name="com" value=<?php echo $com_a; ?>>
			<input type="hidden" name="challenge" value=<?php echo $challenge; ?> >
			
			<input type="hidden" name="eat" value=<?php echo $eat; ?>>
			<input type="hidden" name="bite" value=<?php echo $bite; ?>>
			
			<input type="hidden" name="flag1" value=<?php echo $flag1 ?>>
			<input type="hidden" name="flag2" value=<?php echo $flag2 ?>>
			
			<input type="submit" value="次へ" class="botan">
	
		</form>
		</div>
	<?php } ?>
	
	
</body>
</html>