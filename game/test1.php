<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無題ドキュメント</title>
</head>

<body>
	<?php
	$com = $_GET['rand'];
	$one = $com%10;
	$ten = ($com%100-$one)/10;
	$milion = ($com-$ten*10-$one)/100;
	echo $com;
	
	echo " : ";
	echo $milion;
	echo ",";
	echo $ten;
	echo ",";
	echo $one;
	?>
	
	<p></p>
	
	<img src="../picture/number/<?php echo $milion; ?>.png" width="100" height="100" alt=""/>
	<img src="../picture/number/<?php echo $ten; ?>.png" width="100" height="100" alt=""/>
	<img src="../picture/number/<?php echo $one; ?>.png" width="100" height="100" alt=""/>
	
	<p></p>
	
	<?php
	$level =$_GET['level'];
	echo $level;
	?>
	
</body>
</html>