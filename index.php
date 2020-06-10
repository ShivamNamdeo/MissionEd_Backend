<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
  <!---Bootstrap css ---->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!---Bootstrap css ---->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!---Social Icon ---->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!---Social Icon ---->
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-light mt-5">
                    <div >
                        <h3 class="text-center py-3">Admin Login MissionED</h3>
                    </div>
                    <?php 
                        if(@$_GET['Empty']==true){
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>
                    <?php
                        }
                    ?>
                    
                    <?php 
                        if(@$_GET['Invalid']==true){
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>

                    <div class="card-body">
                      	<form method="post" action="process.php">
  							           <div class="form-group">
    							           <label>Username</label>
    							           <input type="text" class="form-control" name="Username" >
  							           </div>
  							           <div class="form-group">
    							           <label>Password</label>
    							           <input type="password" class="form-control" name="Password">
  							           </div>
  							           <div class="form-group">
  								            <button type="submit" class="btn btn-primary" name="Login">Login</button>
  							           </div>
  							           <div class="form-group">
  								            <a href="signup.php">Create Your Account</a>
  							           </div>
  							           <div class="form-group">
  								            <div style="font-size: 25px; text-align: center;word-spacing: 40px;">
  								              <a href="#"><i class="fa fa-facebook-official" ></i></a>
  								              <a href="#"><i class="fa fa-twitter"></i></a>
                				        <a href="#"><i class="fa fa-google-plus-official"></i></a>
                				        <a href="#"><i class="fa fa-linkedin-square" ></i></a>
                				    </div>
  							       </div>

						          </form>

					           </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>