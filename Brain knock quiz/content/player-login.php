<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../css/player-login.css">
  <link rel="stylesheet" href="../css/signin.css">
</head>
<body>
<h2>Modal Example</h2>
<button id="myBtn">Open Modal</button>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1 id='level-head'>Player-login</h1>
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
		   	</div>
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
</body>
</html>
