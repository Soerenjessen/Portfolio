<div class="topnav" id="myTopnav">
  <a href="forside.php" class="active">Home</a>
  <a href="webudvikling.php">Webudvikling</a>
  <a href="kommunikation.php">Kommunikation</a>
  <a href="design.php">Design</a>
  <a href="online.php"> Online Marketing</a>
  <a href="designthinking.php"> Design Thinking</a>
  <a href="refleksion.php">Refleksion</a>
  <a href="kilder.php">Kilder</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

