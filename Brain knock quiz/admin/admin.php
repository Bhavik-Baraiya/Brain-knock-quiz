<html>
<head>
	<link rel="stylesheet" href="../css/admin.css">
</head>
<body>
<?php
include ('../database/db1.php');
function addescape($string){
	$string1="";
	$j=0;
	for ($i=0; $string[$i]!="?";$i++, $j++){
		if($string[$i]=="'"){
			$string1[$j]="\\";
			$j++;
			$string1[$j]="'";
		} else{
			$string1[$j]=$string[$i];
		}
	}
	$string1[$j]="?";
	return $string1;
}
if(isset($_REQUEST['sub']))
{
	error_reporting(0);
	$catnameErr = $levelErr = $questionErr = $optionsErr = $ansErr = $msg_disp = "";
	$level=$_REQUEST['level'];
	$question=$_REQUEST['que'];
	$option1=$_REQUEST['opt1'];
	$option2=$_REQUEST['opt2'];
	$option3=$_REQUEST['opt3'];
	$option4=$_REQUEST['opt4'];
	$ans1=$_REQUEST['ans'];
	if (empty($_REQUEST['cname']))
	{
		$catnameErr = "Category name is required";
		$categories_name='';
	}
	else
	{
		$categories_name=$_REQUEST['cname'];
	}
	if($categories_name=='Entertainment')
	{
		$cat_id=1;
		$question=addescape($question);
		$que=mysqli_query($conn,"insert into entertainment(question_id,question,option1,option2,option3,option4,ans,levels) values('','$question','$option1','$option2',' $option3','$option4','$ans1','$level')");
		if($que!='')
		{
			$msg_disp='Question Added Successfully...';
		}
		else
		{
			$msg_disp='Question Not Added...';
		}
	}
	elseif($categories_name=='Land_People')
	{
		$cat_id=2;
		$question=addescape($question);
		$que=mysqli_query($conn,"insert into land_people(question_id,question,option1,option2,option3,option4,ans,levels) values('','$question','$option1','$option2',' $option3','$option4','$ans1','$level')");
		if($que!='')
		{
			$msg_disp='Question Added Successfully...';
		}
		else
		{
			$msg_disp='Question Not Added...';
		}
	}
	elseif($categories_name=='History')
	{
		$cat_id=3;
		$question=addescape($question);
		$que=mysqli_query($conn,"insert into history(question_id,question,option1,option2,option3,option4,ans,levels) values('','$question','$option1','$option2',' $option3','$option4','$ans1','$level')");
		if($que!='')
		{
			$msg_disp='Question Added Successfully...';
		}
		else
		{
			$msg_disp='Question Not Added...';
		}
	}
	elseif($categories_name=='Literature_language')
	{
		$cat_id=4;
		$question=addescape($question);
		$que=mysqli_query($conn,"insert into literature_language(question_id,question,option1,option2,option3,option4,ans,levels) values('','$question','$option1','$option2',' $option3','$option4','$ans1','$level')");
		if($que!='')
		{
			$msg_disp='Question Added Successfully...';
		}
		else
		{
			$msg_disp='Question Not Added...';
		}
	}
	elseif($categories_name=='Sports')
	{
		$cat_id=5;
		$question=addescape($question);
		$que=mysqli_query($conn,"insert into sports(question_id,question,option1,option2,option3,option4,ans,levels) values('','$question','$option1','$option2',' $option3','$option4','$ans1','$level')");
		if($que!='')
		{
			$msg_disp='Question Added Successfully...';
		}
		else
		{
			$msg_disp='Question Not Added...';
		}
	}
	elseif($categories_name=='Science_technology')
	{
		$cat_id=6;
		$question=addescape($question);
		$que=mysqli_query($conn,"insert into science_technology(question_id,question,option1,option2,option3,option4,ans,levels) values('','$question','$option1','$option2',' $option3','$option4','$ans1','$level')");
		if($que!='')
		{
			$msg_disp='Question Added Successfully...';
		}
		else
		{
			$msg_disp='Question Not Added...';
		}
	}
	elseif($categories_name=='Current_world_affairs')
	{
		$cat_id=7;
		$question=addescape($question);
		$que=mysqli_query($conn,"insert into current_world_affairs(question_id,question,option1,option2,option3,option4,ans,levels) values('','$question','$option1','$option2',' $option3','$option4','$ans1','$level')");
		if($que!='')
		{
			$msg_disp='Question Added Successfully...';
		}
		else
		{
			$msg_disp='Question Not Added...';
		}
	}
	elseif($categories_name=='Wildlife')
	{
		$cat_id=8;
		$question=addescape($question);
		$que=mysqli_query($conn,"insert into wildlife(question_id,question,option1,option2,option3,option4,ans,levels) values('','$question','$option1','$option2',' $option3','$option4','$ans1','$level')");
		if($que!='')
		{
			$msg_disp='Question Added Successfully...';
		}
		else
		{
			$msg_disp='Question Not Added...';
		}
	}
	elseif($categories_name=='Personalities')
	{
		$cat_id=9;
		$question=addescape($question);
		$que=mysqli_query($conn,"insert into personalities(question_id,question,option1,option2,option3,option4,ans,levels) values('','$question','$option1','$option2',' $option3','$option4','$ans1','$level')");
		if($que!='')
		{
			$msg_disp='Question Added Successfully...';
		}
		else
		{
			$msg_disp='Question Not Added...';
		}
	}
	elseif($categories_name=='Religion')
	{
		$cat_id=10;
		$question=addescape($question);
		$que=mysqli_query($conn,"insert into religion(question_id,question,option1,option2,option3,option4,ans,levels) values('','$question','$option1','$option2',' $option3','$option4','$ans1','$level')");
		if($que!='')
		{
			$msg_disp='Question Added Successfully...';
		}
		else
		{
			$msg_disp='Question Not Added...';
		}
	}

/*
	if($cat_id != '' and $categories_name !='' and $question !='' and $level !='' and $option1 !='' and $option2 !='' and $option3 !='' and $option4 !=''  and $ans1 !='')
	{
		$question=addescape($question);
		$que=mysqli_query($conn,"insert into question_bank(cat_id,question_id,categories_name,level,questions,option1,option2,option3,option4,ans) values('$cat_id','','$categories_name','$level','$question','$option1','$option2',' $option3','$option4','$ans1')");
		$msg_disp='Question Added Successfully...';
	}
	else
	{
		$msg_disp="PLEASE FIRST FILL OUT ALL THE FIELDS..!!";
	}
	*/
}
error_reporting(0);
?>
<h1 id='admin_head1'>Hello! Admin</h1>
<div class="admin_mainbox">
	<form method="post">
		<div class="cat_name">
		<h1 id='admin_head2'>ADD QUESTIONS</h1>
				<span id='cat_nm'>Category Name : <select name="cname" id='cat_nm_select'>
					<option disabled selected value> -- select category -- </option>
					<option value="Entertainment">1.Entertainment</option>
					<option value="Land_People">2.Land_People</option>
					<option value="History">3.History</option>
					<option value="Literature_language">4.lLiterature_language</option>
					<option value="Sports">5.Sports</option>
					<option value="Science_technology">6.Science_technology</option>
					<option value="Current_world_affairs">7.Current_world_affairs</option>
					<option value="Wildlife">8.Wildlife</option>
					<option value="Personalities">9.Personalities</option>
					<option value="Religion">10.Religion</option>
					</select>
				</span>
				<span class="error" id='error_msg'> <?php error_reporting(0); echo $catnameErr; ?></span>
		</div>
		<div class="level">
			<span id='level_nm'>
				Level :
					<input type="radio" name="level" value="l" >Low
					<input type="radio" name="level" value="m" >Medium
					<input type="radio" name="level" value="h" >High
				<span class="error" id='error_msg'> <?php error_reporting(0); echo $levelErr; ?></span>
			</span>
		</div>
		<div class="question_area">
			<span id='question_area'>
				PUT QUESTION HERE 	<br><textarea id='text' rows="4" cols="50" name="que" required></textarea>
				<span class="error" id='error_msg'> <?php error_reporting(0); echo $questionErr; ?></span>
			</span>
		</div>
		<div class="options">
			<span id='option_head'>Options</span>
			<input id='option_ans' type="radio" name="ans" value='a' required>
				A<input id='option'  type="text" name="opt1" required>
			<input id='option_ans' type="radio" name="ans" value='b' required>
				B<input id='option' type="text" name="opt2" required><br>
			<input id='option_ans' type="radio" name="ans" value='c' required>
				C<input id='option' type="text" name="opt3" required>
			<input id='option_ans' type="radio" name="ans" value='d' required>
				D<input id='option' type="text" name="opt4" required>
			<span class="error" id='error_msg'> <?php error_reporting(0); echo $optionsErr; ?></span><br><br>
			<input id='question_sub' type="submit" name="sub" value="DONE">
			<span class='error' id='error_msg'><?php error_reporting(0); echo $msg_disp; ?></span>
		</div>
	</form>
	<a href='../index/index.php' id='admin_logout'>Logout</a>
</div>
</body>
</head>
</html>
