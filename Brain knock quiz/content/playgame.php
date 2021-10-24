<?php
  const TITLE="Playgame";
?>
<?php
include ('../database/db1.php');
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
<?php include('../precode/includeheader.php') ?>
<link rel="stylesheet" href="../css/player_login.css">
<div class="playguestbox">
  <div class="playguest">
    <div class="playguest_content1">
      <span id='playguest_head'>USER LOGIN</span>
        <button type="button" id='myBtn'>PLAY AS USER</button>
          <div id="myModal" class="modal">
            <div class="modal-content">
              <span class="close">&times;</span>
                <form class="" action="" method="post">
                  <div class="signin">
      			        <div class="signin_content">
  				           <h1 id='signin_head'>PLAYER-LOGIN</h1>
  				           <div class='input_signin'>
  					           <i id='signup_logo'class='fas fa-user'></i><input autocomplete='off'; type='text' id='signin_input' placeholder='Username' name='uname' required>
  									     <span class="error"> <?php error_reporting(0); echo $usernameErr; ?></span><br>
  				           </div>
            				 <div class='input_signin'>
            					<i id='signup_logo' class="fa fa-lock"></i><input autocomplete='off'; type='password' id='signin_input' placeholder='Password' name='pass' required>
            						<span class="error"> <?php error_reporting(0); echo $passwordErr; ?></span><br>
            		 		 </div>
  		               <input type='submit' value='Login' id='signin_sub' name='sub'>
  				           <span class="error" id='all_error_msg'> <?php error_reporting(0); echo $allErr; ?></span>
      			        </div>
                  </div>
                </form>
            </div>
          </div>
    </div>
  </div>
  <div class="player">
    <div class="playguest_content1">
      <span id='playguest_head'>GUEST LOGIN</span>
      <button type="button" id='myBtn'><a id='playguest_link' href="../content/playguest.php">PLAY AS GUEST</a></button>
    </div>
  </div>
</div>
<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal)
  {
    modal.style.display = "none";
  }
}
</script>
<?php include('../precode/includefooter.php') ?>
