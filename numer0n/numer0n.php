<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ゲーム画面</title>
<link href="Numer0n.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
	//前の画面から送られた数字を取得
	$com_a = $_GET['com'];
	//echo $com_a;
	//echo ":";
	$com = $com_a/15-13;
	$com_one = $com%10;
	$com_ten = ($com%100-$com_one)/10;
	$com_mil = ($com - $com_ten*10 - $com_one)/100;
	
	/*
	echo $com;
	echo ":";
	echo $com_one;
	echo ":";
	echo $com_ten;
	echo ":";
	echo $com_mil;
	*/
	
	//ヒントであるHIGH＆LOWとSLASHが使用されているかを判定する変数。
	//初回は０を代入する
	if(isset($_GET['flag1'])){
		$flag1=$_GET['flag1'];
	}else{
		$flag1=0;
	}
	
	if(isset($_GET['flag2'])){
		$flag2=$_GET['flag2'];
	}else{
		$flag2=0;
	}
	
	//二回目以降の場合、前回プレイヤーが入力した数字とその結果、試行回数を取得している
	if(isset($_GET['ten']) && isset($_GET['one']) && isset($_GET['challenge'])){
		$mil = $_GET['mil'];
		$ten = $_GET['ten'];
		$one = $_GET['one']; 
		$eat = $_GET['eat'];
		$bite = $_GET['bite'];
		$challenge = $_GET['challenge']; 
	}
	?>
	
	
	<ul class="hint">
	<?php 
		//ヒント用のボタンを作成
		//ヒントが使用されている場合ボタンが表示されないようにしている。
		if($flag1==0){
	?>	
	<li><form action="numer0n.php" method="get" >
		<input type="submit" value="HIGH&LOW" class="botan">
		
		<?php //最初に使用する場合と２回目以降の場合で分けている。ペナルティーとして試行回数＋２
			if(isset($_GET['ten']) && isset($_GET['one']) && isset($_GET['challenge'])){ ?>
				<input type="hidden" name="mil" value="<?php echo $mil; ?>">
				<input type="hidden" name="ten" value=<?php echo $ten; ?>>
				<input type="hidden" name="one" value=<?php echo $one; ?>>
				<input type="hidden" name="challenge" value=<?php echo $challenge+2; ?>>
				<input type="hidden" name="eat" value=<?php echo $eat; ?>>
				<input type="hidden" name="bite" value=<?php echo $bite; ?>>
		<?php } ?>
			<input type="hidden" name="com" value=<?php echo $com_a; ?>>
			<input type="hidden" name="flag1" value=1; >
			<input type="hidden" name="flag2" value=<?php echo $flag2; ?>>
		
	</form></li>
	<?php } ?>
		
	<?php if($flag2==0){ ?>	
	<li><form action="numer0n.php" method="get">
		<input type="submit" value="SLASH" class="botan">
		
		<?php //最初に使用する場合と２回目以降の場合で分けている ペナルティーとして試行回数＋２
		if(isset($_GET['ten']) && isset($_GET['one']) && isset($_GET['challenge'])){ ?>
			<input type="hidden" name="mil" value="<?php echo $mil; ?>">
			<input type="hidden" name="ten" value=<?php echo $ten; ?>>
			<input type="hidden" name="one" value=<?php echo $one; ?>>
			<input type="hidden" name="challenge" value=<?php echo $challenge+2; ?>>
			<input type="hidden" name="eat" value=<?php echo $eat; ?>>
			<input type="hidden" name="bite" value=<?php echo $bite; ?>>
		<?php } ?>
		<input type="hidden" name="com" value=<?php echo $com_a; ?>>
		<input type="hidden" name="flag1" value=<?php echo $flag1; ?>>
		<input type="hidden" name="flag2" value=1; >
		
	</form></li>
	<?php } ?>
	</ul>
	
	<?php  //コンピュータの数字を？の文字で表示している
	       //HIGH&LOWが選択されているかを変数flag1で判別している。
	if($flag1==0){ ?>
	<div class="number">
		<p>COM</p>
		<li><img src="../picture/number/10.png" width="150" height="150" alt=""/></li>
		<li><img src="../picture/number/10.png" width="150" height="150" alt=""/></li>
		<li><img src="../picture/number/10.png" width="150" height="150" alt=""/></li>
	</div>
	<?php }else{ 
		//HIGH&LOWが選択されている場合の処理 ?>
	<div class="number">
		<p>COM</p>
		<li><img src="../picture/number/10.png" width="150" height="150" alt=""/></li>
		<li><img src="../picture/number/10.png" width="150" height="150" alt=""/></li>
		<li><img src="../picture/number/10.png" width="150" height="150" alt=""/></li>
	</div>
		
	<div class="high_low">
	<?php //それぞれの桁の数が５以上であるならHIGH、４以下であるならLOWを表示させている。
	if($com_mil >= 5){ ?>
			<li><img src="../picture/number/high.png" width="100" height="50" alt=""/></li>
	<?php }else if($com_mil <= 4){ ?>
			<li><img src="../picture/number/low.png" width="100" height="50" alt=""/></li>
	<?php } ?>
		
		<p>　　  </p>
		
	<?php 
	if($com_ten >= 5){ ?>
			<li><img src="../picture/number/high.png" width="100" height="50" alt=""/></li>
	<?php }else if($com_ten <= 4){ ?>
			<li><img src="../picture/number/low.png" width="100" height="50" alt=""/></li>
	<?php } ?>	
		
		<p>　　  </p>
		
	<?php 
	if($com_one >= 5){ ?>
			<li><img src="../picture/number/high.png" width="100" height="50" alt=""/></li>
	<?php }else if($com_one <= 4){ ?>
			<li><img src="../picture/number/low.png" width="100" height="50" alt=""/></li>
	<?php } ?>
		
		
	</div>
	<?php } ?>
	
	<?php if($flag2!=0){  //SLASHが選択されている場合に行われる処理
	                      //それぞれの桁の最大値と最小値を求め、その差を表示させている　?>
	<div class="slash">	
	<?php
		$max = $com_mil;
		if($max < $com_ten){
			$max = $com_ten;
		}
		if($max < $com_one){
			$max = $com_one;
		}
		
		$min = $com_mil;
		if($min > $com_ten){
			$min = $com_ten;
		}
		if($min > $com_one){
			$min = $com_one;
		}
		
		$slashnumber = $max - $min;
		//echo $slashnumber;
		
		?>
	<li><p class="slashnumber">Slash Number</p></li>
	<li><img class="snumber" src="../picture/number/<?php echo $slashnumber; ?>.png" width="100" height="100" alt=""/></li>
	
	</div>
	<?php 
	}
	?>
	
	<div class="number">
		<p>YOU</p>
		<?php  //プレイヤーが前回入力した数字を表示させている。
		if(isset($_GET['ten']) && isset($_GET['one']) && isset($_GET['challenge'])){
		?>
			<li><img src="../picture/number/<?php echo $mil; ?>.png" width="150" height="150" alt=""/></li>
			<li><img src="../picture/number/<?php echo $ten; ?>.png" width="150" height="150" alt=""/></li>
			<li><img src="../picture/number/<?php echo $one; ?>.png" width="150" height="150" alt=""/></li>
		<?php }else{ //最初の場合はすべて？の文字を表示させている?>
		<?php $challenge = 0; ?>
			<li><img src="../picture/number/10.png" width="150" height="150" alt=""/></li>
			<li><img src="../picture/number/10.png" width="150" height="150" alt=""/></li>
			<li><img src="../picture/number/10.png" width="150" height="150" alt=""/></li>
		<?php } ?>
	</div>
	
	<?php //２回目以降の場合、前回入力した数字の結果を表示させている
	if(isset($_GET['ten']) && isset($_GET['one']) && isset($_GET['challenge'])){ 
	?>
	<p>　　</p>
	<div class="eat_bite">
		<li><img src="../picture/number/<?php echo $eat; ?>.png" width="100" height="100" alt=""/></li>
		<li><img src="../picture/number/eat.png" width="200" height="100" alt=""/></li>
		<li><img src="../picture/number/<?php echo $bite; ?>.png" width="100" height="100" alt=""/></li>
		<li><img src="../picture/number/bite.png" width="200" height="100" alt=""/></li>
	</div>
	<?php
	}
	?>
	
	<?php $challenge = (int)$challenge + 1;?>
	
	<form action="numer0n_result.php" method="get">
	
	<div class="sentaku">
		<!- プレイヤーが数字を入力するためのプルダウン式の選択肢。
		　　　それぞれの桁ごとに入力する　->
		<li><p>佰之位</p>
		<select name="mil" class="choose">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="0">0</option>	
		</select></li>
		
		<p>　</p>
		
		<li><p>拾之位</p>
		<select name="zilyu" class="choose">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="0">0</option>	
		</select></li>
	
		<p>　</p>
		
		<li><p>壱之位</p>
	<select name="iti" class="choose">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="0">0</option>
		</select></li>
	</div>
	<p>　</p>
	<p>　</p>
	
	<div class="Challenge">	
		
		<input type="hidden" name="com" value=<?php echo $com_a; ?>>
		<input type="hidden" name="challenge" value=<?php echo $challenge ?>>
		<input type="hidden" name="flag1" value=<?php echo $flag1; ?>>
		<input type="hidden" name="flag2" value=<?php echo $flag2; ?>>
		
		<!-　プレイヤーが入力した数字、コンピュータの数字、試行回数、ヒントが使用されているか否かを表す変数をnumer0n_resultへ送り、画面を変遷させる。　->
		
		<input type="submit"  value="コール" class="botan">
	
	</form>
	</div>
	
	
</body>
</html>