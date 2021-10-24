<?php
  include ('../database/db1.php');
  $i=0;
  $level=$_POST['level'];
  $query="SELECT * FROM entertainment WHERE levels='$level' ORDER BY RAND() Limit 5";
  $result=mysqli_query($conn,$query);
  $row = mysqli_fetch_array($result);
  /*  $number_of_question=5;
  $_SESSION['random_no']=[];
  do {
    $r=rand(1,5);
    if(!in_array($r, $_SESSION['random_no'])){
      array_push($_SESSION['random_no'], $r);
    }
  }while(count($_SESSION['random_no'])!=$number_of_question);
  */
  $question_id = $row['question_id'];
  $question = $row['question'];
  $array1=array();
  array_push($array1,$question_id);
  print_r($array1);

  echo "<br>";
  echo $question_id.'.';
  echo $question.'<br>';


  $sql2 = mysqli_query($conn,"SELECT * FROM entertainment  WHERE question_id='$question_id'");
  $row2 = mysqli_fetch_array($sql2);

    $option1 = $row2['option1'];
    $option2 = $row2['option2'];
    $option3 = $row2['option3'];
    $option4 = $row2['option4'];
    $correct = $row2['ans'];

    echo $option1."<br>";
    echo $option2."<br>";
    echo $option3."<br>";
    echo $option4."<br><br>";

?>
