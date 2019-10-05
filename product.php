<?php
session_start();
$search="shirt";
$size="";
?>
<html>
<head>
<title>Fashionspark.com</title>
<link rel="stylesheet" href="css/product.css"></link>

</head>
<body>
<header>
<?php
require "header1.php";
?>
</header>
<section>

 <?php
  if(isset($_SESSION['email'])){
 require "connection.php";

 $sql="Select * from $search";
 $query=mysqli_query($con,$sql) or die(mysqli_error($con));
 $rows=mysqli_num_rows($query);
 $aray=mysqli_fetch_all($query);
  

  for($x=0;$x<$rows;$x++){
      
 ?>
<div class="banner1">
    <div class="image-container1">
        <img src="<?php echo $aray[$x][3];?>"  alt="Content not available!!!"></img>
       <center> <p><?php echo $aray[$x][2]?></p></center>
       <center><p style="margin-top:-1.5vw;">Select Size</p></center>
        <center><button class="cart0" onclick="<?php $size="S"?>">S</button>
        <button class="cart0" onclick="<?php $size="L"?>">L</button>
        <button class="cart0" onclick="<?php $size="XL"?>">XL</button>
        <button class="cart0" onclick="<?php $size="XXL"?>">XXL</button>
        <button class="cart0" onclick="<?php $size="XXXL"?>">XXXL</button></center><br>
       <center> <button class="cart1" onclick="cart_submit.php" >Add To Cart</button></center>
  
    </div>
    
</div>
<?php
 }}
 else{
    ?>
    <meta http-equiv="refresh" content="0;url=login.php" />
<?php
}
 ?>

</section>
<footer>
    <?php
    require "footer.php";
    ?>
</footer>

</body>
</html>