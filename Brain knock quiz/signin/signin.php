<?php include ("../precode/includeheader.php"); ?>
<?php
include ('../database/db1.php');
session_start();
if(isset($_REQUEST['sub']))
{
	$usernameErr = $passwordErr = "";
	if (empty($_REQUEST['uname']))
	{
		$usernameErr = "Username is required";
		$username='';
	}
	else
	{
		$username=$_REQUEST['uname'];
		if(preg_match('/^[@!#$^&*]*$/',$username))
		{
			$usernameErr = "Enter valid value";
			$username='';
		}
		else
		{
			$usernameErr = "";
		}
	}
	if (empty($_REQUEST['pass']))
	{
		$passwordErr = "Enter password";
		$password='';
	}
	else
	{
		$password=$_REQUEST['pass'];
	}
	$allErr='';
	if($username==''|| $password =='')
	{
			$allErr="ENTER USERNAME OR PASSWORD!!";
	}
	else
	{
		if($username=='./admin' and $password=='p@55w0rd')
		{
			$allErr="LOGIN SUCCESSFULLY :)";
			header("Location: ../admin/admin.php");
		}
		else
		{
			$str = $password;
			$cipher = "AES-128-CTR";
			$iv_length = openssl_cipher_iv_length($cipher);
			$options = 0;
			$iv = '8565825542115032';
			$enc_key = "CodeSpeedyKeybj54HH";
			$password = openssl_encrypt($str, $cipher, $enc_key, $options, $iv);

			$que = "select username,password from registration where username = '$username' and password = '$password'";
			$result = mysqli_query($conn, $que);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			error_reporting(0);
			$active = $row['active'];
			$total = mysqli_num_rows($result);
			if($total==1)
			{
				$allErr="LOGIN SUCCESSFULLY :)";
				header("Location: ../content/category.php");
			}
			else
			{
				$allErr="Username Or Password is invalid";
			}
		}
	}
}
?>
<form method="post">
<div class="signin_box_border">
		<div class="signin">
			<div class="signin_content">
				<h1 id='signin_head'>WELCOME</h1>
				<div class='input_signin'>
					<i id='signup_logo'class='fas fa-user'></i><input type='text' id='signin_input' placeholder='Username' name='uname' required>
									<span class="error"> <?php error_reporting(0); echo $usernameErr; ?></span><br>
				</div>
				<div class='input_signin'>
					<i id='signup_logo' class="fa fa-lock"></i><input type='password' id='signin_input' placeholder='Password' name='pass' required>
									<span class="error"> <?php error_reporting(0); echo $passwordErr; ?></span><br>
				</div>
				<input type='submit' value='Login' id='signin_sub'
				name='sub'>
				<span class="error" id='all_error_msg'> <?php error_reporting(0); echo $allErr; ?></span>
				<h1 ><a id='signinlink_head' href="../signup/signup.php">CREATE NEW ACCOUNT<i class="fas fa-arrow-right"></i></a></h1>
		   	</div>
		</div>
</div>
</form>
<?php include ("../precode/includefooter.php"); ?>
