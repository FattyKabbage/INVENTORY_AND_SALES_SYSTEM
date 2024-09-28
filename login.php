<?php
	session_start();
	
	// Check if user is already logged in
	if(isset($_SESSION['loggedIn'])){
		header('Location: index.php');
		exit();
	}
	
	
	require_once('inc/config/db.php');
	require_once('intropage/introheader.html');
  require_once('intropage/register.html');
  
?>
  <body>

<?php
// Variable to store the action (login, register, passwordReset)
$action = '';
	if(isset($_GET['action'])){
		$action = $_GET['action'];
		if($action == 'register'){
      
?>
			<div class="wrapper">
         <div class="title">
            VAPE UNTLD
         </div>
         <form action="#">
			<div id="loginMessage">
      <div class="field">
					<input type="text" id="registerFullName" name="registerFullName" required>
					<label>Fullname</label>
				</div>
				<div class="field">
					<input type="text" id="registerUsername" name="registerUsername" required autocomplete="on">
					<label>Username</label>
				</div>

				<div class="field">
					<input type="password" id="registerPassword1" name="registerPassword1" required>
					<label>Password</label>
				</div>
        <div class="field">
					<input type="password" id="registerPassword2" name="registerPassword2" required>
					<label>Re-enter Password</label>
				</div>
					
					<div class="field">
					<input type="submit" id="login" value="Sign Up">
					</div>
					<div class="signup-link">
					Already have an account? <a href="login.php">Login now</a>
				</div>
			</div>
         </form>
      </div>
         </form>
      </div>
<?php
			
			echo '</body></html>';
			exit();
		} elseif($action == 'resetPassword'){
?>
			 <div class="login-clean">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a href="#" class="forgot">Forgot your email or password?</a></form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<?php

			

			echo '</body></html>';
			exit();
		}
	}	
?>
	<!-- Default Page Content (login form) -->
	<div class="wrapper">
         <div class="title">
            VAPE UNTLD
         </div>
         <form action="#">
			<div id="loginMessage">
				<div class="field">
					<input type="text" id="loginUsername" name="loginUsername" required>
					<label>Username</label>
					</div>
					<div class="field">
					<input type="password" id="loginPassword" name="loginPassword" required>
					<label>Password</label>
					</div>
					
					<div class="field">
					<input type="submit" id="login" value="Login">
					</div>
					<div class="signup-link">
					Not a member? <a href="login.php?action=register">Signup now</a>
				</div>
			</div>
         </form>
      </div>
   </body>
<?php
	
?>
  </body>
</html>
