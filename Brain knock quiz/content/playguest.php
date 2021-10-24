<?php
  const TITLE="Playguest";
?>
<?php include('../precode/includeheader.php') ?>
<?php
include ('../database/db1.php');
if(isset($_REQUEST['sub']))
{
	error_reporting(0);
	$unameErr = "";
	if (empty($_REQUEST['uname']))
	{
		$unameErr = "Name is required";
		$username='';
	}
	else
	{
		$username=$_REQUEST['uname'];
    if(!preg_match('/^[a-zA-Z0-9]*$/',$username))
		{
				$unameErr = "Only Alphabet and Numeric Value allowed..!!";
				$username='';
		}
	}
	$country=$_REQUEST['country'];
  $born=$_REQUEST['bdate'];
	$allErr='';
	if($username=='' || $born==''||  $country=='')
	{
			$allErr="ENTER APPROPRIATE FIELDS..!!";
	}
	else
	{
		$que=mysqli_query($conn,"INSERT INTO playguest VALUES('$username','$country','$born')");
    if($que!='')
    {
      header("Location: ../content/category.php");
    }
    else {
      echo "Not Connecting :(";
    }
  }

}
else
{
	echo '';
}
error_reporting(0);
?>
<form method="post">
  <div class="playguest_box">
    <span id='playguest_id'>WELCOME GUEST</span>
    <div class='input_playguest'>
      <i id='user_logo'class='fas fa-user'></i><input type='text' id='playguest_input' placeholder='Username' name='uname' required>
      <span class="error"> <?php error_reporting(0); echo $usernameErr; ?></span><br>
    </div>
    <div class="playguest_bornin1">
      <h1 id='playguest_born_head'>COUNTRY :</h1>
      <select id="playguest_born1" name="country">
        <span class="error" id='error_msg'> <?php error_reporting(0); echo $birthdateErr; ?></span>
        <option value="india">India</option>
        <option value="australia">Australia</option>
        <option value="america">America</option>
        <option value="japan">Japan</option>
        <option value="china">China</option>
        <option value="nathereland">Nathereland</option>
        <option value="switzerland">Switzerland</option>
        <option value="italy">Italy</option>
        <option value="germany">Germany</option>
        <option value="france">France</option>
        <option value="iraq">Iraq</option>
        <option value="syria">Syria</option>
        <option value="russia">Russia</option>
      </select>
    </div>
    <div class="playguest_bornin">
      <h1 id='playguest_born_head'>BORN IN :</h1>
      <select id="playguest_born" name="bdate">
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
    <a id='playguest_link' href="../content/category.php"><input type="submit" name="sub" Value='GO' id='playguest_sub'></a>
  </div>
</form>
<?php include('../precode/includefooter.php') ?>
