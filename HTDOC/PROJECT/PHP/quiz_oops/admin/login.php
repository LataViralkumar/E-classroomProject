<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			 <div class="panel panel-danger">
				  <div class="panel-heading">Online Quiz system in php</div>
				  <div class="panel-body">Quiz in php </div>
			</div>
		</div>
    </div>
</div>




	<div class="container">
		<div class="row">
			     <div class="col-sm-6">
					  <div class="panel panel-info">
                      <div class="panel-heading">Admin Login Form</div>
						<div class="panel-body">
						<?php
						if(isset($_GET['run'])  && $_GET['run']=="failed")
						{
							echo "Your email or password is not correct";
						}
						?>
							  <form role="form" method="post">
								<div class="form-group">
								  <label for="Admin id">Admin id:</label>
								  <input type="text" class="form-control" name="e" id="email" placeholder="Enter Admin id">
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							  </form>
						  </div>
						  </div>
					  </div>
				 
				   
	   </div>
   </div>
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
<?php
            $ai=$_POST['e'];
            $ap=$_POST['p'];
          $con=mysqli_connect("localhost","root","","quiz_oops");
          $sq="SELECT * FROM admin WHERE admin_id='$ai' && password='$ap'";
          $qu=mysqli_query($con,$sq);
          if($qu==true)
             {
          header("location:index.php");
            }
          else
          {
          	echo "login failed";
          }
?>