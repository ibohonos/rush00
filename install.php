<?php
	if (file_exists("config.php")) :
		?>
			<script>
				window.location.href = 'index.php';
			</script>
		<?php
	else :
		$query = mysql_query("CREATE DATABASE rush00");
		$query = mysql_query(
			"CREATE TABLE `products` (
				`id` int(11) NOT NULL,
				`name` varchar(255) NOT NULL,
				`description` text,
				`price` int(11) DEFAULT NULL,
				`sku` varchar(255) DEFAULT NULL,
				`qty` int(11) DEFAULT NULL,
				`image` varchar(255) DEFAULT NULL
			)"
		);
		$query = mysql_query(
			"CREATE TABLE `users` (
				`id` int(11) NOT NULL,
				`email` varchar(255) NOT NULL,
				`pass` varchar(255) NOT NULL,
				`first_name` varchar(255) NOT NULL,
				`last_name` varchar(255) NOT NULL,
				`is_admin` int(2) NOT NULL DEFAULT '0'
			)"
		);
		$query = mysql_query(
			"INSERT INTO `users` (`email`, `pass`, `first_name`, `last_name`, `is_admin`) VALUES
				('admin@admin.ua', '7e77279cb4b3e9ce20b50e853e466d5af7cd63faddca227c8ef7b6d5aaece35f340c1f35e9b468bebe73c29da1057bafa2790a5ec05176f3fb07cd3d9a43cb24', 'Admin', 'Admin', 1)"
		);
		$query = mysql_query(
			"ALTER TABLE `products`
			ADD PRIMARY KEY (`id`),
			MODIFY `id` int(11) NOT NULL AUTO_INCREMENT"
		);
		$query = mysql_query(
			"ALTER TABLE `users`
			ADD PRIMARY KEY (`id`),
			ADD UNIQUE KEY `email` (`email`),
			MODIFY `id` int(11) NOT NULL AUTO_INCREMENT"
		);
		$query = mysql_query("CREATE USER 'rush00'@'localhost' IDENTIFIED BY 'rush00'");
		// $query = mysql_query("GRANT USAGE ON *.* TO 'rush00'@'localhost'");
		$query = mysql_query("GRANT ALL PRIVILEGES ON `rush00`.* TO 'rush00'@'localhost'");
		copy("config_sample.php", "config.php");
		?>
			<script>
				window.location.href = 'index.php';
			</script>
		<?php
	endif;
?>