<?php include_once "incl/header.php"; ?>
	<main>
		<div class="container">
			<h1 class="titles">Hello <?php echo ft_logged_user_data('first_name'); ?> <?php echo ft_logged_user_data('last_name'); ?> </h1><a id="logout-button" href="logout.php">Log out</a>
		</div>
	</main>
<?php include_once "incl/footer.php"; ?>
