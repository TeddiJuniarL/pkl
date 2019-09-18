<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<ul>
		<?php foreach ($upload_data as $item => $value):?>
			<li><?php echo $item; ?>: <?php echo $value;  ?></li>
		<?php endforeach;  ?>
	</ul>
</body>
</html>