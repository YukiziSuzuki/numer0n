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
	?>
	
	<div class="number">
		<p>COM</p>
		<li><img src="../picture/number/10.png" width="100" height="100" alt=""/></li>
		<li><img src="../picture/number/10.png" width="100" height="100" alt=""/></li>
		<li><img src="../picture/number/10.png" width="100" height="100" alt=""/></li>
	</div>
	
	
	
	<div class="number">
	<p>YOU</p>
	<?php
		if(isset($_GET['ten']) && isset($_GET['one']) && isset($_GET['result']) && isset($_GET['challenge'])){
			$mil = $_GET['mil'];
			$ten = $_GET['ten'];
			$one = $_GET['one']; 
			$result = $_GET['result'];
			$challenge_a = $_GET['challenge']; ?>
			<li><img src="../picture/number/<?php echo $mil; ?>.png" width="100" height="100" alt=""/></li>
			<li><img src="../picture/number/<?php echo $ten; ?>.png" width="100" height="100" alt=""/></li>
			<li><img src="../picture/number/<?php echo $one; ?>.png" width="100" height="100" alt=""/></li>
			<li><img src="../picture/number/<?php echo $result; ?>.png" width="300" height="100" alt=""/></li>
		<?php }else{ ?>
		<?php $challenge_a = 0; ?>
			<li><img src="../picture/number/10.png" width="100" height="100" alt=""/></li>
			<li><img src="../picture/number/10.png" width="100" height="100" alt=""/></li>
			<li><img src="../picture/number/10.png" width="100" height="100" alt=""/></li>
		<?php } ?>
	</div>
	
		<?php $challenge = (int)$challenge_a + 1;?>
	
	<form action="normal_result.php" method="get">
	
	<div class="normal_sentaku">
		
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

		<input type="submit"  value="コール" class="botan">
	
	</form>
	</div>
	
	
</body>
</html>