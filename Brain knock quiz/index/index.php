<?php
  const TITLE="Homepage";
?>
<?php include('../precode/includeheader.php') ?>
 
<div class="container3">
  <div class="home-content">
    <img src="../img/lifelines.png" alt="">
  </div>
  <div class="home-content">
    <img src="../img/timer.png" alt="">
  </div>
  <div class="home-content">
    <img src="../img/live-score.png" alt="">
  </div>
  <div class="home-content">
    <img src="../img/multi-choice.png" alt="">
  </div>
</div>
<script>
var myIndex = 0;
carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>
<?php include('../precode/includefooter.php') ?>
