<?php
session_start();
include_once 'dbconnect.php';
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
if(isset($_POST['btn-login']))
{
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$upass = mysqli_real_escape_string($conn,$_POST['pass']);
	$hashed_password = hash('sha256', $upass);
	$res=mysqli_query($conn,"SELECT * FROM tbl_users WHERE userEmail='$email'");
	$row=mysqli_fetch_array($res);
 
	if($row['userPassword']== $hashed_password)
	{
		$_SESSION['user'] = $row['userId'];
		header("Location: home.php");
	}
	else
	{
		?>
        <script>alert('wrong details');</script>
        <?php
	}
 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php';?>
</head>
<body>
	<?php include 'navbar.php';?>
	<div class="container container-height">
	    <fieldset>
	      <legend>User Login</legend>
	      <form name="login" method="post" autocomplete = "off">
	        <div class="form-group">
	          <label for="email">Email:</label>
	          <input type="textbox" class="form-control" id="email" name="email" placeholder="Enter your Email-id">
	        </div> 
	        <div class="form-group">
	          <label for="pass">Password:</label>
	          <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password">
	        </div> 
	        <div class="form-group">
	        	<button type="submit" class="btn btn-default" name="btn-login">Sign In</button>
	        </div>
	        <div class="form-group">
	          New User? <a href="register.php">Register Here!</a>
	        </div>
	        <div class="form-group">
	         	Employee? <a href="emplogin.php">Login here</a>
	        </div>      
	      </form>
	    </fieldset>
  	</div>
  	<footer>
	<?php include 'footer.php';?>
	</footer>
</body>
</html>