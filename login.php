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

  <form>
    <div class="text1">
      <label><h5> Sign in to continue </h5></label>
      <label style="margin-left: 55%;"> Not a member yet? 
      <a href="#">Register Now </label></a>
    </div>
      
      <div class="form-group row">
        <label for="name1" class="col-sm-2 col-form-label">Username:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name1" placeholder="Username">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password:</label>
      <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
      </div>
      </div>
      <div class="login-bottom">
        
        <div class="">
          <input class="" type="checkbox" id="autoSizingCheck">
          <label class="form-check-label" for="autoSizingCheck" >Remember me</label>
        </div>
        
        <div class="">
          <button type="submit" class="btn btn-success" >Login now</button>
        </div>
        
        <div>
          <label>Or Sign up with</label>
        </div>
        <div>
          <img src="1gg.png" width="150"  >
          <img src="fb.png" width="140" >
        </div>
      </div>

  </form> 
</div>  
</body>
</html>