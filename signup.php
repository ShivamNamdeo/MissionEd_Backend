<!DOCTYPE html>
<html lang="en">
<head>
	<title>Signup Page</title>
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
                        <h3 class="text-center py-3">Signup MissionED</h3>
                    </div>
                    <div class="card-body">
                      <!-----------Message--------->
                        <?php
                          session_start();
                          if(isset($_SESSION['sign_msg'])){
                        ?>
                          <div style="height: 40px;"></div>
                            <div class="alert alert-success">
                            <span>
                              <center>
                            <?php echo $_SESSION['sign_msg'];
                              unset($_SESSION['sign_msg']); 
                              ?>
                              </center>
                          </span>
                        </div>
                        <?php
                        }
                        ?>
                        <!-----------Message--------->
                      	<form method="post" action="insert.php">
  							           <div class="form-group">
    							           <label>Name</label>
    							           <input type="text" class="form-control" name="name" >
  							           </div>

                            <div class="form-group">
                             <label>Email</label>
                             <input type="email" class="form-control" name="email" >
                           </div>
                           <div class="form-group">
                             <label>Phone Number</label>
                             <input type="number" class="form-control" name="phone" >
                           </div>
                          <div class="form-group">
                             <label>Class</label>
                             <input type="text" class="form-control" name="class" >
                           </div>

  							           <div class="form-group">
    							           <label>Password</label>
    							           <input type="password" class="form-control" name="password">
  							           </div>

  							           <div class="form-group">
  								            <button type="submit" class="btn btn-primary">Sign Up</button>
  							           </div>

  							           <div class="form-group">
  								            <a href="index.php">Already Have Account ? Login Here</a>
  							           </div>
  							           <div class="form-group">
  								            <div style="font-size: 25px; text-align: center;word-spacing: 40px;">
  								              <a href="#"><i class="fa fa-facebook-official"></i></a>
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