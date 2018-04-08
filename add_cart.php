<?php
include_once "db.php";
include_once "functions.php";

if (!isset($_POST) || empty($_POST) ) :
	die("You are cheater!");
endif;
if (isset($_POST['product_id'])) :
	$id = $_POST['product_id'];
endif;

$product = ft_get_by_id($connect, "products", $id);

$_SESSION['cart'][$id] = $product;
mysqli_close($connect);

?>
<script>
	window.history.back();
</script>
