<?php
	if (file_exists("config.php")) :
		include_once "config.php";
	else :
		?>
		<script>
			window.location.href = 'install.php';
		</script>
		<?php
	endif;
	include_once "functions.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Just food</title>
	<link rel="icon" href="/<?php echo __PRJ_URL__; ?>/img/icon.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="/<?php echo __PRJ_URL__; ?>/css/style.css">
</head>
<body>
	<div id="all-content">
