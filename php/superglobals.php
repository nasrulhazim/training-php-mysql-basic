<?php

// var_dump($GLOBALS);
// var_dump($_SERVER);
var_dump($_REQUEST);
var_dump($_POST);
var_dump($_GET);
var_dump($_FILES);
// var_dump($_ENV);
// var_dump($_COOKIE);
// var_dump($_SESSION);

?>
<!DOCTYPE html>
<html>
<head>
	<title>superglobals</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="product_image" id="product_image">
		<input type="text" name="product_name" id="product_name">
		<input type="submit" value="hantar">
	</form>
</body>
</html>