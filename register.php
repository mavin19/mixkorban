<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <?php
    include_once("script.php");
  ?>
	<div class="container">
  		
    		<div class="text1">
      			<label><h5> Sign up to continue </h5></label>
    		</div>
      
      		<div class="form-group row">
							<label for="name1" class="col-sm-2 col-form-label">Username:</label>
							<div class="col-sm-10">
									<input type="text" class="form-control" id="name1" placeholder="Username">
							</div>
      		</div>
      		<div class="form-group row">
							<label for="email" class="col-sm-2 col-form-label">Email: </label>
							<div class="col-sm-10">
									<input type="Email" class="form-control" id="email1" placeholder="Email">
							</div>
      		</div>
      		<div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">Password:</label>
							<div class="col-sm-10">
									<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
							</div>
      		</div>
      		<div class="form-group row">
							<label for="inputRe-Password3" class="col-sm-2 col-form-label">Re-Password:</label>
							<div class="col-sm-10">
									<input type="password" class="form-control" id="inputRe-Password3" placeholder="Re-Password">
							</div>
      		</div>
      		<div class="login-bottom">
							<div class="">
									<button type="submit" class="btn btn-success">Login now</button>
							</div>
							<div>
									<label>Or Sign up with</label>
							</div>
							<div>
									<img src="1gg.png" width="150" >
									<img src="fb.png" width="140">
							</div>
      		</div>

  		
	</div>  
</body>
</html>