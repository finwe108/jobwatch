<?php include_once('../../includes/initialize.php'); ?>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$username = $_POST['Username'];
		$pass = md5($_POST['Password']);
		$user = User::authenticate($username,$pass);

		switch ($user->role) {
			case 'Administrator':
				redirect_to('../admin/');
				break;

			case 'User':
				redirect_to('../user/');
				break;	
			
			case 'Employer':
				redirect_to('../employer');
				break;
			default:
				redirect_to('../');
				break;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="icon" type="text/css" href="../images/icon32.ico">
	<link rel="stylesheet" type="text/css" href="../styles/css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/css/login.css">
	<link rel="stylesheet" type="text/css" href="../styles/css/mohan.css">
</head>
<body class="wetasphalt">

<nav class="navbar navbar-expand-md amethyst navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><!--<i class="fa d-inline fa-lg fa-cloud"></i>--><img  src="../images/logonotext.png" style="width: 45px; height: 30px;"> <?php echo APP_NAME; ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
        </ul>
        <a class="btn navbar-btn ml-2 text-white hover-peterriver belizehole"><i class="fa d-inline fa-lg fa-user-circle-o"></i> Register</a>
      </div>
    </div>
  </nav>

<div class = "container">
	<div class="wrapper">
		<form action="" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading peterriver-text">Welcome Back!<br> Please Sign In</h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="Username" placeholder="Username" required="" autofocus="" />
			  <input type="password" class="form-control" name="Password" placeholder="Password" required=""/>
			  <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>     		  
			 
			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" type="Submit">Login</button> 
			  <br>			
		<p><a href="">Forgot Password?</a></p>			
		</form>
	</div>
</div>
</body>
</html>