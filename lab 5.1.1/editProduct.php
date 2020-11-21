<?php 
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/config.php');
//require_once 'controller/productInfo.php';
$product = fetchProduct($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Product Name:</label><br>
  <input value="<?php echo $product['name'] ?>" type="text" id="name" name="name"><br>
  <label for="quantity">Quantity:</label><br>
  <input value="<?php echo $product['quantity'] ?>" type="text" id="quantity" name="quantity"><br>
  <label for="price">Price:</label><br>
  <input value="<?php echo $product['price'] ?>" type="text" id="price" name="price"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateProduct" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

