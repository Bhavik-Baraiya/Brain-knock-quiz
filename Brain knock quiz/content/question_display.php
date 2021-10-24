<?php
	include ('../database/db1.php');
	include ('level-cat.php');
	
	$sql1="SELECT * FROM registration";
	$query_result=mysqli_query($conn, $sql1);
	$row1=mysqli_fetch_array($query_result, MYSQLI_NUM);
	$player_id=$row1[0];
	$playername=$row1[1];
	$category='';
	$level='';
	$correct="<script>document.write(sc);</script>";
	echo $correct;
	$wrong="<script>document.write(dsc)</script>";
	$point="<script>document.write(p)</script>";

	$sql2=mysqli_query($conn,"INSERT INTO scoretable VALUES('$player_id','$playername','$category','$level','$correct','$wrong','$point')");

?>
<!DOCTYPE html> 
<html>
<head>
	<title>quiz</title>
	<link rel="stylesheet" href="../css/question_display.css">
</head>
<body>
	<div class="quiz_wrapper">
		<div class="question_container3">
			<div class="question_container1">
        <div class="question_block" style="background-color:lightgreen;">
          <span id='block_text'>Correct</span>
          <div class='inside_block'>
			<div class="score-card">
              <span id="scoreCard"> 0</span>
              <span id="scoreCard"> <?php echo $correct;?></span>
			</div>
          </div>
        </div>
        <div class="question_block" style="background-color:#FE8055;">
          <span id='block_text'>Wrong</span>
          <div class='inside_block'>
			<div class="score-card">
				<span id="dscoreCard"> 0</span>
			</div>
          </div>
        </div>
        <div class="question_block2">
					<div id="some_div"></div>
        </div>
        <div class="question_block"  style="background-color:#0E979F;">
          <span  id='block_text'>Points</span>
          <div class='inside_block'>
			<div class="score-card">
				<span id="pointCard">  0</span>
			</div>
          </div>
        </div>
        <div class="question_block"  style="background-color:#AEBE01;">
          <span style='font-size:24px;' id='block_text'>Highscore</span>
          <div class='inside_block'>
            <span id='block_context'><?php echo "0";?></span>
          </div>
         </div>
      </div>
			<div id="gameoverbox">
				<p id='gohead'>Gameover..!!</p>
			</div>
			<div class="question" id="questionBox">

			</div>
			<div class="option-content">
				<div class="options">
					<ul id="ul">
						<li id="op1" onclick="button(this)"></li>
						<li id="op2" onclick="button(this)"></li>
						<li id="op3" onclick="button(this)"></li>
						<li id="op4" onclick="button(this)"></li>
					</ul>
				</div>
			</div>
			<div class="nxt-scr">
				<div class="score">
					<div class="next">
						<button type="button" onclick="next()" id="button">Next</button>
					</div>
				</div>
			</div>
		</div>
	</div>
  <script src="../js/question_display.js"></script>
</body>
</html>
