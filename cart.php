<?php
include_once "incl/header.php";
?>
<div id="body">
	<main>
		<h1 class="titles">CART</h1>
		<div id="cart" class="container">
			<?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) : ?>
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
							<td><a href="checkout.php" class="shopUnitMore">CHECKOUT</a></td>
							<td></td>
						</tr>
					</table>
				</div>
			<?php else : ?>
				<div id="cart-table">
					<h2 style="text-align: center;">Cart is empty</h2>
				</div>
			<?php endif; ?>
		</div>
	</main>
</div>
<?php
	include_once "incl/footer.php";
?>