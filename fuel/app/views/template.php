<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php //$title 各ページによって変わる
			echo $title; ?></title>
	$title 各ページによって変わる
</head>

<body>
	<h1>お問い合わせ</h1>
	<div id="wrapper">
		<?php //$title 各ページによって変わる
			echo $content; ?>
		<hr>
		<p class="footer">
			Powered by <?php echo Html::anchor('http://fuelphp.com/', 'FuelPHP'); ?>
		</p>
	</div>
</body>
</html>
