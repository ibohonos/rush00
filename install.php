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
			?>
				<script>
					window.location.href = 'index.php';
				</script>
			<?php
		endif;
	endif;
?>