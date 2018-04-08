<?php
	include_once "incl/header.php";
	include_once "db.php";

	$products = ft_get_table_data($connect, 'products');
?>
	<div id="body">
	<main>
		<div id="products">
			<?php if (empty($_GET)) : ?>
				<h1 class ="titles">Products</h1>
				<div id="content-products">
						<div id="admin-access">
							<?php if (ft_is_admin()) : ?>
								<a href="/<?php echo __PRJ_URL__; ?>/product_cat.php?add">Add category</a><br>
							<?php endif; ?>
							<?php if (ft_is_admin()) : ?>
								<a href="/<?php echo __PRJ_URL__; ?>/products.php?add">Create product</a>
							<?php endif; ?>
							<?php if (!ft_is_admin()) : ?>
								<p>Take a look at all of our products</p>
							<?php endif; ?>
						</div>
						<div id="products-list">
								<?php if (!empty($products)) : ?>
										<?php $i = 0; foreach ($products as $product) : ?>
											<div class="particular-product">
												<?php if (!empty($product['image'])) : ?>
													<div class="img">
														<img src="<?php echo $product['image']; ?>">
													</div>
												<?php endif; ?>	
												<a href="/<?php echo __PRJ_URL__; ?>/product.php?id=<?php echo $product['id'];?>">
													<?php echo strtoupper($product['name']); ?>
												</a>
												<?php if ($product['price'] > 0) : ?>
													<p>$<?php echo $product['price']; ?></p>
												<?php endif; ?>
											</div>
											<?php $i++; ?>
											<?php if ($i % 3 == 0) : ?>
												<div class="clearfix"></div>
											<?php endif; ?>
										<?php endforeach; ?>
								<?php else : ?>
									<p>No products.</p>
								<?php endif; ?>
							</div>
						</div>
						</div>
					</div>
					<div class="clearfix"></div>
			<?php elseif (isset($_GET['add'])) : ?>
				<?php include_once __PRJ_DIR__ . "/add_product.php"; ?>
			<?php endif; ?>
		</div>
	</main>
</div>
<?php include_once "incl/footer.php"; ?>
