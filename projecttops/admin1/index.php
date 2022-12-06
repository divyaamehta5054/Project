<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Admin Login</h2>
  <form action="" method="post">
    <div class="mb-3 mt-3">
    <tr>
      <td>Email:</td>
        <td><input type="email" name="Email" class="form-control"></td>
       </tr>
    </div>
    <div class="mb-3">
    <tr>
      <td>Password:</td>
        <td><input type="password" name="Password" class="form-control"></td>
      </tr>
    </div>
    <tr colspan="2" align="right">
      <td><a href="change">Change Password</a><br><a href="forgot">Forgot Password</a></td>
    </tr><br>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <tr>
      <td align="center" colspan="2"><input type="submit" name="login" value="login" class="btn btn-primary">
    </tr>
  </form>
</div>

</body>
</html> -->







<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styels.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<!-- <div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
             
						</div>
					 <input type="email" name="Email" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="Password" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="forgot">Forgot your password?</a>
          <a href="change">change your password?</a>
				</div>
			</div> -->
      <form action="" method="post">
    <div class="mb-3 mt-3">
    <tr>
      <td>Email:</td>
        <td><input type="email" name="Email" class="form-control"></td>
       </tr>
    </div>
    <div class="mb-3">
    <tr>
      <td>Password:</td>
        <td><input type="password" name="Password" class="form-control"></td>
      </tr>
    </div>
    <tr colspan="2" align="right">
      <td><a href="change">Change Password</a><br><a href="forgot">Forgot Password</a></td>
    </tr><br>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <tr>
      <td align="center" colspan="2"><input type="submit" name="login" value="login" class="btn btn-primary">
    </tr>
  </form>
		</div>
	</div>
</div>
</body>
</html>
