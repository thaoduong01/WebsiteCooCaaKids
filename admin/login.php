<?php
    session_start();
    ob_start();

    include('../model/connect.php');
    include('../model/user.php');

    if((isset($_POST['login'])) && ($_POST['login'])){
        $username = $_POST['username'];
        $pass = $_POST['pass'];

		$kq = getuserinfo($username, $pass);

		$role = $kq[0]['Role'];

		if ($role == 1) {
			$_SESSION['Role'] = $role;
			header('Location: admin.php');
		} else if (!empty($kq)) {

			$_SESSION['Role'] = $role;
			$_SESSION['iduser'] = $kq[0]['ID'];
			$_SESSION['user'] = $kq[0]['Username'];
			header('Location: ../user/index.php');
		} else {
			$txt_error = "Username or Pass khong ton tai";
		}
		
		 // $role = checkuser($username, $pass);

        // $_SESSION['Role'] = $role;
        // if($role == 1) header('Location: admin.php');
		// else {
		// 	$txt_error = "Username or Pass khong ton tai";
		//  }
        //  header('Location: login.php');
        
    }


?>
<!Doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image:url('images/bglogin.jpg');">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
					<span style="color:red;">
					</span>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" name="username">
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" name="pass">
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
				<div class="message text-danger">
					<?php
						if(isset($txt_error) && ($txt_error != "")){
							echo $txt_error;
						}
					?>
				</div>
	            <div class="form-group">
	            	<button type="submit" name="login" class="form-control btn btn-primary submit px-3" value="Submit">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/pass.js"></script>

	</body>
</html>

