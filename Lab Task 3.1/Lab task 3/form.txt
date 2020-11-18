<html>
<head>

<title> LOGIN and REGISTRATION </title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
	<div class="row">
		<div class="col-md-6">
			<h2> LOGIN</h2>
			<form action="validation.php" method="post">
				<div class="form-group">
					<label> User Name</label>
					<input type="text" name="User Name :" class="form-control"required>
				</div>
				<div class="form-group">
					<label> Password</label>
					<input type="password" name="password :" class="form-control"required>
				</div>

				 Remember Me: <input type="Button" name="dd"/>
  
 
                  <span class="error"><?php echo $DisplayErr;?></span>
                                                          <br><br>

				 <input type="submit" name="submit" value="Submit">

				 <button type="submit" class="btn btn-primary"> Forget Password </button> <br>

				 <h2>CHANGE PASSWORD</h2>

				 <div class="form-group">
					<label>Current Password</label>
					<input type="password" name="password :" class="form-control"required>
				</div>

				<div class="form-group">
					<label>New Password</label>
					<input type="password" name="password :" class="form-control"required>
				</div>

				<div class="form-group">
					<label>Re-Type Password</label>
					<input type="password" name="password :" class="form-control"required>
				</div>
				<input type="submit" name="submit" value="Submit"> <br>
				<h2>PROFILE PICTURE</h2>
		
		<img src="image.jpg" width="101" height="144"> <br>
		<input type="submit" name="submit" value="Choose file"> no file chosen <br>
		<input type="submit" name="submit" value="Submit">



				
			</form>

		
		 
	</div>

	<div class="col-md-6">
			<h2> REGISTRATION</h2>
			<form action="validation.php" method="post">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" name="Name :" class="form-control"required>
				</div>
				<div class="form-group">
					<label> Email:</label>
					<input type="email" name="email :" class="form-control"required>
				</div>
				<div class="form-group">
					<label>User Name:</label>
					<input type="text" name="uername :" class="form-control"required>
				</div>
				<div class="form-group">
					<label> Password:</label>
					<input type="password" name="password :" class="form-control"required>
				</div>
				<div class="form-group">
					<label> Confirm Password:</label>
					<input type="password" name="password :" class="form-control"required>
				</div>
				Gender: <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="Female">female
  <input type="radio" name="gender" value="Other">other <br>

  Date of Birth :
  dd

   <select name="dd">
    <option value="01">1</option>
    <option value="02">2</option>
    <option value="03">3</option>
    <option value="04">4</option>
    
  </select>

 

  mm

  <select name="mm">
    <option value="01">Jan</option>
    <option value="02">Feb</option>
    <option value="03">March</option>
    <option value="04">April</option>
    
  </select>
  

  yyy

  <select name="yyy">
    <option value="01">1996</option>
    <option value="02">1997</option>
    <option value="03">1999</option>
    <option value="04">2000</option>
    
  </select> <br>

  

  <input type="submit" name="submit" value="submit">
  <input type="submit" name="submit" value="reset"> <br>



	
</div>


</body>

	
</html>

	