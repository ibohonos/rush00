<?php include_once "head.php"; ?>
<header>
	<div id="headerInside" class="container">
		<div id="left-menu">
			<a href="/<?php echo __PRJ_URL__; ?>">HOME</a>
			<a href="/<?php echo __PRJ_URL__; ?>/products.php">PRODUCTS</a>
		</div>
		<div id="central-logo">
			<a href="/<?php echo __PRJ_URL__; ?>">
				<img id="logo" src="/<?php echo __PRJ_URL__; ?>/img/logo.png" alt="logo" title="logo">
			</a>
		</div>
		<div id="right-menu">
			<div class="auth">
				<?php if (!ft_is_loggined()) : ?>
					<a href="/<?php echo __PRJ_URL__; ?>/auth.php">SIGN IN</a>
					<a href="/<?php echo __PRJ_URL__; ?>/reg.php">SIGN UP</a>
					<a href="/<?php echo __PRJ_URL__; ?>/cart.php">CART</a>
				<?php else : ?>
					<a href="/<?php echo __PRJ_URL__; ?>/profile.php">PROFILE</a>
					<a href="/<?php echo __PRJ_URL__; ?>/cart.php">CART</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</header>