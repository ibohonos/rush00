<?php
include_once "incl/header.php";
include_once "db.php";

$product = ft_get_by_id($connect, 'products', $_GET['id']);
?>
	<main>
		<div id="open-product" class="container">
			<h1 class="titles">
				<?php if (!empty($product)) : ?>
					<span><?php echo $product['name']; ?></span>
				<?php else : ?>
					<span>Product not found!</span>
				<?php endif; ?>
			</h1>
			<div id="inside-open-product">
				<?php if (!empty($product)) : ?>
					<?php if (!empty($product['image'])) : ?>
							<img id="product-pic" src="<?php echo $product['image']; ?>">
					<?php endif; ?>
					<div id="product-description">
						<p><?php echo nl2br($product['description']); ?></p>
					</div>
					<form action="add_cart.php" method="POST">
						<input type="hidden" name="product_id" value="<?php echo $product['id'] ?>">
						<div id="button">
							<input type="submit" name="submit" value="Add to cart" class="shopUnitMore">
						</div>
					</form>
				<?php endif; ?>
			</div>
		</div>
	</main>
<?php
include_once "footer.php";