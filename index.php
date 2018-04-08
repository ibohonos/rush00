<?php include_once "incl/header.php"; ?>
<?php include_once "functions.php"; ?>
	<div id="body">
		<main>
			<div id="top-content">
				<div class="slideshow">
					<img src="img/main-img-q1.jpg" alt="Slide 3">
					<img src="img/main-img-q2.jpg" alt="Slide 2">
					<img src="img/main-img-q3.jpg" alt="Slide 1">
				</div>
				<div class="drop-down-menu">
					<div class="wrapper">
						<button class="dropbtn">Categories</button>
						<div class="content">
							<a href="#">Category</a>
							<a href="#">Category</a>
							<a href="#">Category</a>
							<a href="#">Category</a>
							<a href="#">Category</a>
						</div>
					</div>
					<div class="wrapper">
						<button class="dropbtn">
							<a href="/<?php echo __PRJ_URL__; ?>/delivery.php">Delivery</a>
							</button>
					</div>
					<div class="wrapper">
						<button class="dropbtn">
							<a href="/<?php echo __PRJ_URL__; ?>/about.php">About</a>
							</button>
					</div>
					<div class="wrapper">
						<button class="dropbtn">
							<a href="/<?php echo __PRJ_URL__; ?>/contact.php">Contact</a>
							</button>
					</div>
				</div>
			</div>
			<h1 class="titles">OUR BEST SELLERS</h1>
			<div id="best-sellers">
				<div class="shopUnit" id="top-left">
					<img src="img/products/macaroon.png" />
					<div class="shopUnitName">
						MACAROONS
					</div>
					<div class="shopUnitShortDesc">
							Light, soft and crispy at the same time, our macaroons will bring you absolute joy!
					</div>
					<div class="shopUnitPrice">
							PRICE: $2 per one
					</div>
					<a href="/<?php echo __PRJ_URL__; ?>/product.php" class="shopUnitMore">
							Read more
						</a>
				</div>

				<div class="shopUnit" id="top-right">
					<img src="img/products/pasta.png" />
					<div class="shopUnitName">
						SPAGHETTI CARBONARA
					</div>
					<div class="shopUnitShortDesc">
							Our spaghetti Carbonara is the best choice for you. Homemade pasta with delicious sauce will help you defeat your hunger.
					</div>
					<div class="shopUnitPrice">
							PRICE: $7.50
					</div>
					<a href="#" class="shopUnitMore">
							Read more
						</a>
				</div>
		        <div class="shopUnit" id="bottom-left">
					<img src="img/products/pizza.png" />
					<div class="shopUnitName">
						VESUVIO PIZZA
					</div>
					<div class="shopUnitShortDesc">
							Our best recommendation for a party or a family gathering. Our advice is to order two because one will be gone in no time 
					</div>
					<div class="shopUnitPrice">
							PRICE: $10
					</div>
					<a href="#" class="shopUnitMore">
							Read more
						</a>
				</div>
		        <div class="shopUnit" id="bottom-right">
					<img src="img/products/tiramisu.png" />
					<div class="shopUnitName">
						TIRAMISU
					</div>
					<div class="shopUnitShortDesc">
							Tiramisu is an Italian word that means “pick me up” or “lift me up”. Tiramisu is delicious coffee flavored cheesecake or Italian dessert.
					</div>
					<div class="shopUnitPrice">
							PRICE: $5
					</div>
					<a href="#" class="shopUnitMore">
							Read more
						</a>
				</div>
		</main>
	</div>
<?php include_once "incl/footer.php"; ?>
