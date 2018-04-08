<?php
include_once "incl/header.php";
// include_once "db.php";

// $product = ft_get_by_id($connect, 'products', $_GET['id']);
?>
<div id="body">
	<main>
		<div id="open-product" class="container">
			<h1 id="name">NAME
				<?php if (!empty($product)) : ?>
					<span><?php echo $product['name']; ?></span>
				<?php else : ?>
					<span>Product not found!</span>
				<?php endif; ?>
			</h1>
			<div id="inside-open-product">
			<?php if (!empty($product)) : ?>
				<div class="row">
					<?php if (!empty($product['image'])) : ?>
						<div class="col-3">
							<img src="<?php echo $product['image']; ?>">
						</div>
						<div class="col-9">
						<?php else : ?>
							<div class="col-12">
						<?php endif; ?>
							<p><?php echo nl2br($product['description']); ?></p>
							</div>
						</div>
					<?php endif; ?>
				</div>
			<!-- <img id="product-pic" src="img/products/macaroon.png">
			<div id="product-description">
				<p>Light, soft and crispy at the same time, our macaroons will bring you absolute joy!<br>
					<strong>Ingredients:</strong> sugar, almond flour, eggs, cream, natural coloring.</p>
			</div>
			<div id="button">
				<button type="submit">ADD TO CART</button>
			</div> -->
			</div>
		</div>
	</main>
</div>
<?php
	include_once "incl/footer.php";
?>