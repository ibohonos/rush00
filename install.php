<?php
	if (file_exists("config.php")) :
		?>
			<script>
				window.location.href = 'index.php';
			</script>
		<?php
	else :
		?>
			<!DOCTYPE html>
			<html>
			<head>
				<title>Install</title>
			</head>
			<body>
				<div style="width: 1024px; margin: 80px auto 0; text-align: center;">
					<form action="" method="POST">
						<div style="margin: 10px 0;">
							<label for="dbname">BD Name</label>
							<input type="text" name="dbname" id="dbname">
						</div>
						<div style="margin: 10px 0;">
							<label for="uname">User Name</label>
							<input type="text" name="uname" id="uname">
						</div>
						<div style="margin: 10px 0;">
							<label for="upass">User password</label>
							<input type="text" name="upass" id="upass">
						</div>
						<div style="margin: 10px 0;">
							<label for="host">Host</label>
							<input type="text" name="host" id="host">
						</div>
						<input type="submit" name="submit">
					</form>
				</div>
			</body>
			</html>
		<?php
		if (isset($_POST) && !empty($_POST)) :
			copy("config_sample.php", "config.php");
			$arr = [
				'$db_host' => '$db_host = "' . $_POST['host'] . '";' . "\n",
				'$db_user' => '$db_user = "' . $_POST['uname'] . '";' . "\n",
				'$db_pass' => '$db_pass = "' . $_POST['upass'] . '";' . "\n",
				'$db_name' => '$db_name = "' . $_POST['dbname'] . '";' . "\n"
			];
			file_put_contents("config.php", $arr, FILE_APPEND);
			include_once "db.php";
			$query = "CREATE TABLE products (
					id int(11) NOT NULL,
					name varchar(255) NOT NULL,
					description text,
					price int(11),
					sku varchar(255),
					qty int(11),
					image varchar(255)
				)";
			if (mysqli_query($connect, $query)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($connect);
			}
			$query = "CREATE TABLE users (
					id int(11) NOT NULL,
					email varchar(255) NOT NULL,
					pass varchar(255) NOT NULL,
					first_name varchar(255) NOT NULL,
					last_name varchar(255) NOT NULL,
					is_admin int(2) NOT NULL DEFAULT 0
				)";
			if (mysqli_query($connect, $query)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($connect);
			}
			$query = "ALTER TABLE products
				ADD PRIMARY KEY (id),
				MODIFY id int(11) NOT NULL AUTO_INCREMENT";
			if (mysqli_query($connect, $query)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($connect);
			}
			$query = "ALTER TABLE users
				ADD PRIMARY KEY (id),
				ADD UNIQUE KEY email (email),
				MODIFY id int(11) NOT NULL AUTO_INCREMENT";
			if (mysqli_query($connect, $query)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($connect);
			}
			$query = "INSERT INTO users (email, pass, first_name, last_name, is_admin) VALUES
					('admin@admin.ua', '7e77279cb4b3e9ce20b50e853e466d5af7cd63faddca227c8ef7b6d5aaece35f340c1f35e9b468bebe73c29da1057bafa2790a5ec05176f3fb07cd3d9a43cb24', 'Admin', 'Admin', 1)";
			if (mysqli_query($connect, $query)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($connect);
			}
			$query = "INSERT INTO products (name, description, price, sku, qty, image) VALUES
('Macaroons', 'Light, soft and crispy at the same time, our macaroons will bring you absolute joy!\r\nIngredients: sugar, almond flour, eggs, cream, natural coloring.', 2, 'mac12', 50, 'img/products/macaroon.png'),
('Spaghetti Carbonara', 'Feeling extremely hungry? Our spaghetti Carbonara is the best choice for you. Homemade pasta with delicious sauce will help you defeat your hunger.\r\nIngredients: spaghetti(water, eggs, flour), bacon, garlic, Parmesan cheese, eggs.', 8, 'car45', 10, 'img/products/pasta.png'),
('Vesuvio Pizza', 'Our best recommendation for a party or a family gathering. Our advice is to order two because one will be gone in no time \r\nIngredients: Olives, Corn, Sweet Bell Pepper, Broccoli, Fresh Mushrooms and Gherkins. Chicken.', 10, 'piz9', 20, 'img/products/pizza.png'),
('Tiramisu', 'Tiramisu is an Italian word that means &ldquo;pick me up&rdquo; or &ldquo;lift me up&rdquo;. Tiramisu is delicious coffee flavored cheesecake or Italian dessert.\r\nIngredients: Heavy, Sugar, Water, Sponge Cake, Egg, Cream Cheese, Mascarpone Cheese, Stabilizer, Coffee, Modified Cornstarch, Cocoa, Pure Vanilla, Caramel (Color).', 5, '3451ghg', 50, 'img/products/tiramisu.png'),
('Caprese', 'Fresh cherry tomatoes, delicious mozzarella, a bit of basil with original homemade pesto sauce &ndash; what can be better for your lunch?\r\nIngredients: cherry tomato, buffalo mozzarella, basil, pesto sauce.', 5, '', 18, 'img/products/caprese.png'),
('Bruschetta', 'Discover a perfect Italian appetizer, which will tame your hunger a little bit and prepare you for some real food. Our bruschettas come on a homemade freshly baked bread and with three different toppings: chopped tomatoes, salmon, and pesto sauce.\r\nIngredients: homemade bread, cherry tomatoes, olive oil, salmon, pesto sauce.', 3, 'brus34', 70, 'img/products/bruchettas.png'),
('Lasagna', 'The dish you fall in love with from the first bite and immediately come back for more!\r\nIngredients: flour, eggs, carrot, onion, celery, olive oil, tomatoes, ground beef, Bolognese sauce.', 15, 'las46', 9, 'img/products/lasagna.png'),
('Minestrone', 'Feeling sad, clod, and lonely? Our minestrone soup will bring you back to life!\r\nIngredients: beans, onions, celery, carrots, stock, and tomatoes.', 3, 'min56', 7, 'img/products/minestrone.png'),
('Risotto', 'Amazing combination of gorgeous taste and total simplicity. Popular choice for breakfast.\r\nIngredients: chicken stock, arborio rice, vermouth, shallot, butter, vegetable oil, Parmesan cheese, parsley, mushrooms.', 6, 'ris12', 16, 'img/products/risotto.png'),
('Ravioli with spinach', 'The perfect combination of soft dough, fresh filling, and a creamy cheese.\r\nIngredients: water, wheat flour, spinach, ricotta cheese.', 6, 'rav76', 60, 'img/products/ravioli.jpg');"
			?>
				<script>
					window.location.href = 'index.php';
				</script>
			<?php
		endif;
	endif;
?>