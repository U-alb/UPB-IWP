<?php
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $pizzaType = $_POST['pizzaType'];
    $topping = $_POST['topping'];
    $size = $_POST['size'];
    $quantity = $_POST['quantity'];

$toppingPrice = 0;
for ($i = 0; $i < count($topping); $i++) {
    $toppingPrice += $topping[$i];
}

$price = ($pizzaType * $size + $toppingPrice) * $quantity;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<h2>Order data</h2>
	<p>Name: <?php echo $name; ?></p>
	<p>Telephone: </p>
	<p>Topping price </p>
	<p>Price: <?php echo $price; ?> </p>

</body>
</html>