<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無題ドキュメント</title>
</head>

<body>
	<?php
	$data = [];
	$data[] = 10;
	$data[] = 40;
	echo count($data);
	print_r($data);
	?>
	
	<form action="test3.php" method="get">
		
		<input type="hidden" name="count" value=<?php echo count($data); ?>>
		
	<?php
		for($i=0; $i<count($data); $i++){ ?>
			
			<input type="hidden" name=<?php echo $i; ?> value=<?php echo $data[$i]; ?>>
			
  <?php } ?>
		

		<input type="submit" value="送信" class="botan">
	</form>
	
	
	
</body>
</html>