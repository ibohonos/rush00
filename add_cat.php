<h1 class="titles">Add category</h1>
<div id="add-cat">
	<form action="/<?php echo __PRJ_URL__; ?>/create_cat.php" method="POST">
		<div>
			<label for="name">Name: </label>
			<input type="text" name="name" id="name">
		</div>
		<input id="create-cat-button" type="submit" name="submit" value="Create">
	</form>
</div>
