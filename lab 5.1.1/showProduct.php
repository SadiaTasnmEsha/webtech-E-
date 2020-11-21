<?php  
require_once 'controller/productInfo.php';

$product = fetchProduct($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Image</th>
	</tr>
	<tr>
		<td><a href="showProduct.php?id=<?php echo $product['id'] ?>"><?php echo $product['name'] ?></a></td>
		<td><?php echo $product['quantity'] ?></td>
		<td><?php echo $product['price'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $product['image'] ?>" alt="<?php echo $product['name'] ?>"></td>
	</tr>

</table>


</body>
</html>