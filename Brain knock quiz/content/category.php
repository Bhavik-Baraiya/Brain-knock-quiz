<?php
  session_start();
  const TITLE="category";
?>
<?php include('../precode/includeheader.php');
include("../database/db1.php");

if(isset($_REQUEST['low$row[0]'])||isset($_REQUEST['medium$row[0]'])||isset($_REQUEST['high$row[0]']))
{
  $lev=$_REQUEST['low'];
  echo $lev;
}
?>

<div class="cat_container_2">
  <div class="cat_container_2_1">
    <span id='category_head'>CATEGORIES</span>
  </div>
</div>

<div class="cat_container_3">
    <form action='../content/question_display.php'>
      <label for='cat1'>
      <div class='category_box'>
        <div class='category_img'>
          <img src=
          '../img/logos/entertainment.png'
          width='100%' height='100%'\"'>
        </div>
          <span id='cat_nm'>1. Entertainment</span>
      </div>
      </label>
      <input type='radio' name='cat' value='Entertainment' id='cat1' style="display:none" > 
      <label for='cat2'>
      <div class='category_box'>
        <div class='category_img'>
          <img src=
          '../img/logos/lp.png'
          width='100%' height='100%'\"'>
        </div>
          <span id='cat_nm'>2. Land&people </span>
      </div>
      </label>
      <input type='radio' name='cat' value='Land&people' id='cat2' style="display:none">
      <label for='cat3'>
      <div class='category_box'>
        <div class='category_img'>
          <img src=
          '../img/logos/history.jpg'
          width='100%' height='100%'\"'>
        </div>
          <span id='cat_nm'>3. History</span>
      </div>
      </label>
      <input type='radio' name='cat' value='History' id='cat3' style="display:none" > 
      <label for='cat4'>
      <div class='category_box'>
        <div class='category_img'>
          <img src=
          '../img/logos/LL.png'
          width='100%' height='100%'\"'>
        </div>
          <span id='cat_nm'>4. Literature&language</span>
      </div>
      </label>
      <input type='radio' name='cat' value='Literature&language' id='cat4' style="display:none" >
      <label for='cat5'>
      <div class='category_box'>
        <div class='category_img'>
          <img src=
          '../img/logos/sports.webp'
          width='100%' height='100%'\"'>
        </div>
          <span id='cat_nm'>5. Sports</span>
      </div>
      </label>
      <input type='radio' name='cat' value='Sports' id='cat5' style="display:none" > 
      <label for='cat6'>
      <div class='category_box'>
        <div class='category_img'>
          <img src=
          '../img/logos/st.jpg'
          width='100%' height='100%'\"'>
        </div>
          <span id='cat_nm'>6. Science&technology</span>
      </div>
      </label>
      <input type='radio' name='cat' value='Science&technology' id='cat6' style="display:none">
      <label for='cat7'>
      <div class='category_box'>
        <div class='category_img'>
          <img src=
          '../img/logos/cf.jpg'
          width='100%' height='100%'\"'>
        </div>
          <span id='cat_nm'>7. Current&wolrdaffairs </span>
      </div>
      </label>
      <input type='radio' name='cat' value='Current&wolrdaffairs' id='cat7' style="display:none" > 
      <label for='cat8'>
      <div class='category_box'>
        <div class='category_img'>
          <img src=
          '../img/logos/business.jpg'
          width='100%' height='100%'\"'>
        </div>
          <span id='cat_nm'>8. Business</span>
      </div>
      </label>
      <input type='radio' name='cat' value='Business' id='cat8' style="display:none" >
      <label for='cat9'>
      <div class='category_box'>
        <div class='category_img'>
          <img src=
          '../img/logos/wildlife.png'
          width='100%' height='100%'\"'>
        </div>
          <span id='cat_nm'>9. Wildlife </span>
      </div>
      </label>
      <input type='radio' name='cat' value='Wildlife' id='cat9' style="display:none" > 
      <label for='cat10'>
      <div class='category_box'>
        <div class='category_img'>
          <img src=
          '../img/logos/personalities.jpg'
          width='100%' height='100%'\"'>
        </div>
          <span id='cat_nm'>10. Personalities </span>
      </div>
      </label>
      <input type='radio' name='cat' value='Personalities' id='cat10' style="display:none" > 
  <?php
    $query="SELECT * FROM categories";
    $query_result=mysqli_query($conn, $query);
    $count=10;
    while($row=mysqli_fetch_array($query_result, MYSQLI_NUM) AND $count<11)
    {
      echo "
      <div id=\"myModal\" class=\"modal\">
        <div class=\"modal-content\">
          <span class=\"close\">&times;</span>
          <h1 id='level-head'>--Select Level--</h1>
          <input id='level-btn' type=\"submit\" value='Low' name=\"level\">
          <input id='level-btn' type=\"submit\" value='Medium' name=\"level\">
          <input id='level-btn' type=\"submit\" value='High' name=\"level\">
          </div>
      </div>
      </from>
      ";
    }
    ?>
</div>
<script>
for($i=0;$i<10;$i++)
{
  var modal = document.getElementsByClassName("modal")[$i];
  var btn = document.getElementsByClassName("category_box")[$i];
  var span = document.getElementsByClassName("close")[$i];
  btn.onclick = function() {
  modal.style.display = "block";
  }

  span.onclick = function() {
  modal.style.display = "none";
  }
  window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  }
}
</script>
<?php include('../precode/includefooter.php') ?>
