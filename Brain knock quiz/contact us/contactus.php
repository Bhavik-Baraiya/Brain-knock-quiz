<?php include ("../precode/includeheader.php"); ?>
<?php
include ('../database/db1.php');
if(isset($_REQUEST['sub']))
{
	error_reporting(0);
	$nameErr = $msgErr = "";
	if (empty($_REQUEST['nme']))
	{
		$nameErr = "Name is required";
	}
	else
	{
		$Name=$_REQUEST['nme'];
		if(!preg_match('/^[a-zA-Z ]*$/',$Name))
		{
				$nameErr = "Only letters and white space allowed";
		}
	}
	$Email=$_REQUEST['eml'];

	if (empty($_REQUEST['msg']))
	{
		$msgErr = " * please enter appropriate msg";
	}
	else
	{
		$Message=$_REQUEST['msg'];
	}

	$que=mysqli_query($conn,"insert into contact(name,email,message) values ('$Name','$Email','$Message')");

	if($que!='')
	{
		echo "Record inserted";
	}
	else
	{
		echo "Record not inserted";
	}
}
else
{
	echo '';
}
	error_reporting(0);
?>
<form method="post">
	<div class="contactus_box">
		<div class="contactus_box_inner">
			<span id='contactus_head1'>-MESSAGE US-</span>
			<span id='contactus_head2'>Got a question or a request? Please fill in the form below.</span>
			<input id='input-contactus' type="text" name="nme" placeholder="Nickname" required>
			<span class="error"> <?php error_reporting(0); echo $nameErr; ?></span>
			<input id='input-contactus' type="text" name="eml" placeholder="Email" required>
			<textarea id='input-contactus' type="text" name="msg" col="50" rows="4" placeholder="Message" required></textarea>
			<span class="error"> <?php error_reporting(0); echo $msgErr; ?></span>
			<input id='submit-contactus' type="submit" name="sub" value="SEND">
		</div>
	</div>
</form>
<?php include ("../precode/includefooter.php"); ?>
