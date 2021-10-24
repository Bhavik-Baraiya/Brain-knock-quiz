<?php include ("../precode/includeheader.php"); ?>
<?php
include ('..\database\db1.php');
if(isset($_REQUEST['sub']))
{
	error_reporting(0);
	$nameErr = $ageErr = $emailErr = $genderErr = $birthdateErr = $passwordErr = $mobileErr ="";
	if (empty($_REQUEST['uname']))
	{
		$nameErr = "Name is required";
		$username='';
	}
	else
	{
		$username=$_REQUEST['uname'];
		if(preg_match('/^[a-zA-Z0-9]*$/',$username))
		{
				$nameErr = "";
		}
		elseif(!preg_match('/^[a-zA-Z0-9]*$/',$username))
		{
				$nameErr = "Only Alphabet and Numeric Value allowed..!!";
				$username='';
		}
	}

	$gender=$_REQUEST['gender'];

	if (empty($_REQUEST['bdate']))
	{
		$birthdateErr = " * ";
		$birthdate='';
	}
	else
	{
		$birthdate=$_REQUEST['bdate'];
	}
	if (empty($_REQUEST['mobile']))
	{
		$mobileErr = " * ";
		$mobile='';
	}
	else
	{
		$mobile=$_REQUEST['mobile'];

		if(!preg_match('/^[0-9]*$/',$mobile))
		{
				$mobileErr = "Enter Only Numeric Value..!!";
				$mobile='';
		}
		elseif(strlen(trim($mobile)) < 10)
		{
        $mobileErr = "Mobile No. must have 10 numbers..!!";
				$mobile='';
		}
	}
	if (empty($_REQUEST['email']))
	{
		$emailErr = "Email Address is required..!!";
	}
	else
	{
		$email=$_REQUEST['email'];
		if(!preg_match('/^[a-z0-9@.]*$/',$email))
		{
				$emailErr = "Enter appropriate Email Address..!!";
				$email ='';
		}
		else
		{
				$emailErr = "";
				$email = filter_var($email, FILTER_SANITIZE_EMAIL);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false)
				{
					echo "";
				}
				else
				{
					$emailErr = "Entered email is invalid..!!" ;
					$email ='';
				}
		}
	}
	if (empty($_REQUEST['pass']))
	{
		$passwordErr = " * please enter password";
		$password='';
	}
	else
	{
		$password=$_REQUEST['pass'];
		if(strlen($password) < 6)
		{
        $passwordErr = "Password must have atleast 6 characters..!!";
				$password='';
		}
		elseif(preg_match('/^[a-zA-Z]*$/',$password))
		{
				$passwordErr = "Enter appropriate password..!!";
				$password='';
		}
		elseif(preg_match('/^[0-9]*$/',$password))
		{
				$passwordErr = "Enter appropriate password..!!";
				$password='';
		}
		elseif(preg_match('/^[@#$%^&*]*$/',$password))
		{
				$passwordErr = "Enter appropriate password..!!";
				$password='';
		}
		elseif(preg_match('/^[a-zA-Z@#$%^&*0-9]*$/',$password))
		{
				$passwordErr = "";
		}
	}

	$allErr='';
	if($username=='' || $birthdate==''||  $email=='' || $mobile=='' || $password =='')
	{
			$allErr="ENTER APPROPRIATE FIELDS..!!";
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


		$que=mysqli_query($conn,"INSERT INTO registration VALUES('','$username','$gender','$birthdate','$email','$mobile','$password')");
		$allErr="REGISTRATION SUCCESSFULLY :)";
	}
}
else
{
	echo '';
}
error_reporting(0);
?>
<form method="post" action="signup.php">
	<div class="signup_box_border">
		<div class="signup">
			<div class="signup_content">
				<h1 id='signup_head'>Sign Up</h1>
				<div class='input'>
					<i id='signup_logo'class='fas fa-user'></i><input id='signup_input' placeholder="Username" type="text" name="uname" required>
					<span class="error" id='error_msg'><?php error_reporting(0); echo $nameErr; ?></span><br><br>
				</div>
				<div class='input'>
					<i id='signup_logo' class='far fa-envelope'></i><input id='signup_input' placeholder="Email" type="text" name="email" ><br>
					<span class="error" id='error_msg'><?php error_reporting(0); echo $emailErr; ?></span><br><br>
				</div>
				<div class='input_gen_born'>
					<div class="gender">
						<h1 id='reg_gender_head'>GENDER:</h1>
						<div class="gender_icon_male">
							<label for="male_icon_1">
								<i class="fa fa-male fa-2x" id='male_icon' aria-hidden="true"></i>
							</label>
							<input type="radio" name="gender" value="male" style="display:none" id="male_icon_1">
						</div>
						<div class="gender_icon_female">
							<label for="female_icon_1">
								<i id='female_icon' class="fa fa-female fa-2x" aria-hidden="true"></i>
								</label>
								<input type="radio" name="gender" value="male" style="display:none" id="female_icon_1">
						</div>
					</div>
					<div class="bornin">
						<h1 id='reg_born_head'>BORN IN:</h1>
						<select id="reg_born" name="bdate">
							<span class="error" id='error_msg'> <?php error_reporting(0); echo $birthdateErr; ?></span>
							<option value="1990">1990</option>
							<option value="1991">1991</option>
							<option value="1992">1992</option>
							<option value="1993">1994</option>
							<option value="1994">1993</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
						</select>
					</div>
				</div>
				<div class='input'>
					<i id='signup_logo' class="fa fa-mobile-phone"></i><input id='signup_input' placeholder="Mobile No." type="text" name="mobile" required>
					<span class="error" id='error_msg'> <?php error_reporting(0); echo $mobileErr; ?></span>
				</div>
				<div class='input'>
					<i id='signup_logo' class="fa fa-lock"></i><input id='signup_input' placeholder="Password" type="password" name="pass"required >
					<span class="error" id='error_msg'> <?php error_reporting(0); echo $passwordErr; ?></span>
				</div>
				<input id='reg_sub'type="submit" name="sub" value="REGISTER"><br><br>
				<span class="error" id='all_error_msg'> <?php error_reporting(0); echo $allErr; ?></span>
				<h1 ><a id='signuplink_head' href="../signin/signin.php">Already Member? Login<i class="fas fa-arrow-right"></i></a></h1>
			</div>
		</div>
	</div>
</form>
<?php include ("../precode/includefooter.php"); ?>
