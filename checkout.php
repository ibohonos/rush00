<?php
include_once "incl/header.php";
include_once "functions.php";
?>
<div id="body">
	<main>
		<h1 class="titles">CHECKOUT</h1>
		<div id="cart" class="container">
			<?php if (ft_is_loggined()) : ?>
				<?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart']) && !isset($_POST['submit'])) : ?>
					<div id="cart-table">
						<table>
							<tr>
								<th>Product</th>
								<th>SKU</th>
								<th>Price</th>
							</tr>
							<?php foreach ($_SESSION['cart'] as $val) : ?>
								<tr>
									<td><?php echo $val['name']; ?></td>
									<td><?php echo $val['sku']; ?></td>
									<td>$<?php echo $val['price']; ?></td>
								</tr>
							<?php endforeach; ?>
							<tr>
								<td></td>
								<td>
									<form action="" method="POST">
										<input type="submit" name="submit" value="CONFIRM" class="shopUnitMore">
									</form>
								</td>
								<td></td>
							</tr>
						</table>
					</div>
				<?php elseif (isset($_POST['submit'])) : ?>
					<?php unset($_SESSION['cart']); ?>
					<h2 style="text-align: center;">Thank you for your purchase! We will contact you in a short while.</h2>
				<?php else : ?>
					<div id="cart-table">
						<h2 style="text-align: center;">You are a cheater!</h2>
					</div>
				<?php endif; ?>
			<?php else : ?>
				<h2 style="text-align: center;">Please <a href="reg.php" class="shopUnitMore" style="display: inline-block;">register</a> or <a href="auth.php" class="shopUnitMore" style="display: inline-block;">login</a></h2>
			<?php endif; ?>
		</div>
	</main>
</div>
<?php
	include_once "incl/footer.php";
?>