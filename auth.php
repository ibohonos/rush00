<?php
	include_once "config.php";
	include_once "incl/header.php";
?>
	<div id="body">
		<main>
			<div id="sign-in">
				<?php if (!ft_is_loggined()) : ?>
					<form id="auth-form" action="/<?php echo __PRJ_URL__; ?>/autorization.php" method="POST">
						<div id="insides-auth-form">
							<div class="row">
								<label for="email">Please, enter your e-mail</label><br>
								<input type="email" placeholder="example@example.com" name="email" id="email">
							</div>
							<div class="row">
								<label for="pass">Please, enter your password</label><br>
								<input type="password" placeholder="qwerty1234" name="pass" id="pass">
							</div>
							<button type="submit">SUBMIT</button>
						</div>
					</form>
				<?php else : ?>
					<h1>Hello <?php echo ft_logged_user_data('first_name'); ?> <?php echo ft_logged_user_data('last_name'); ?> - <?php echo  ft_logged_user_data('email'); ?> <a href="logout.php">Log out</a></h1>
				<?php endif; ?>
			</div>
		</main>
	</div>
<?php
	include_once "incl/footer.php";
?>