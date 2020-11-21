<?php  
require_once 'controller/productInfo.php';

$product = fetchAllProduct();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($product as $i => $product): ?>
			<tr>
				<td><a href="showProduct.php?id=<?php echo $product['id'] ?>"><?php echo $product['name'] ?></a></td>
				<td><?php echo $product['quantity'] ?></td>
				<td><?php echo $product['price'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $product['image'] ?>" alt="<?php echo $product['name'] ?>"></td>
				<td><a href="editProduct.php?id=<?php echo $product['id'] ?>">Edit</a>&nbsp<a href="controller/deleteProduct.php?id=<?php echo $product['id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>