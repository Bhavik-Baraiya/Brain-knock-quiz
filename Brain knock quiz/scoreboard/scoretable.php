<?php include ("../precode/includeheader.php"); ?>

<?php
include ('../database/db1.php');

$que = "select * from scoretable where 1";
      $result = mysqli_query($conn, $que);//true/false
      if($result){
        echo "<h1 id='scoretable-head'>---Scoretable---</h1>";
        if(mysqli_num_rows($result)){

          echo "
          <div class=\"scoreboard-content\">
          <table>
            <tr>
              <th> Player-ID</th>
              <th>Players-Name</th>
              <th>Category</th>
              <th>Level</th>
              <th>Points</th>
            </tr>";
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
             echo "
            <tr>
              <td>".$row['p_id']."</td>
              <td>".$row['player_name']."</td>
              <td>".$row['category']."</td>
              <td>".$row['levels']."</td>
              <td>".$row['points']."</td>

            </tr>
            ";
        }
        echo "

          </table>
          </div>";
      } else{
        echo "<h2>(empty)</h2>";
      }
    }  else{
          header("Location: score.php?runStatus=error");
        }
      //echo $row['Player-ID'];
?>

<?php include ("../precode/includefooter.php"); ?>
