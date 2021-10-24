<?php
  session_start();
  const TITLE="category";
?>
<?php include('../precode/includeheader.php');
include("../database/db1.php");?>

<div class="cat_container_1">
  <div class="player_head">
    <span id='player_head'>||-------------||</span>
  </div>
</div>
<div class="cat_container_2">
  <div class="cat_container_2_1">
    <span id='category_head'>CATEGORIES</span>
  </div>
</div>

<div class="cat_container_3">
  <?php
    $query="SELECT * FROM categories";
    $query_result=mysqli_query($conn, $query);
    $count=10;
    while($row=mysqli_fetch_array($query_result, MYSQLI_NUM) AND $count<11)
    {
      echo "
      <form action=\"../content/level.php\">
        <label for=\"$row[0]\">
          <div class=\"category_box\">
            <div class=\"category_img\">
              <img src=
              \"$row[2]\"
              width=\"100%\" height=\"100%\">
            </div>
              <span id='cat_nm'>".$row[0].".".$row[1]."</span>
          </div>
        </label>
        <input type=\"submit\" name=\"$row[0]\" value=\"$row[1]\" style=\"display:none\" id=\"$row[0]\">    
      </form> 
      ";
    }
    ?>
</div>

<?php include('../precode/includefooter.php') ?>
