<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>スタート画面</title>
<link href="Page/Numer0n.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<div class="gazou">
		<img src="picture/number/numer0n.png" width="800" height="300" alt=""/>
	</div>
	
	<?php
	//コンピュータの数字を設定している
	$com=0;
	$one = rand(0,9);
	$com = $one;
	
	while(1){     //同じ数字を二度以上使わないようにするため、同じ数字が出た場合はもう一度ループさせ、
		          //違う数字が出たらループから抜けるようにしている。
		$ten = rand(0,9);
		if($ten != $one){
			$com = $ten*10 + $one;
			break;
		}
	}
	
	while(1){  //百の位であるため０が出ないようにしている
		$mil = rand(1,9);
		if($mil != $ten && $mil != $one){
			$com = $mil*100 + $ten*10 + $one;
			break;
		}
	}
	
	//echo $com;
	
	?>
	
	<p>　</p>
	<!- 遊び方へのリンク ->
	<div class="asobi">
		<a href="Page/numer0n_explanation.html" class="asobikata">遊び方</a>
	</div>
	<p>　</p>
	
	
	<form action="Page/numer0n.php" method="get">
		<div class="start">
			<input type="submit" value="スタート" class="botan">
			<input type="hidden" name="com" value=<?php echo ($com+13)*15; ?> >
		</div>
	</form>
	
</body>
</html>