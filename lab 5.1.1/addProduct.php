<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Product Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="quantity">Quantity:</label><br>
  <input type="text" id="quantity" name="quantity"><br>
  <label for="price">Price:</label><br>
  <input type="text" id="price" name="price"><br>
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createProduct" value="Create">
  <input type="reset"> 
</form> 

</body>
</html>

