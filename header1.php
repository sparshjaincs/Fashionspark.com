<html>
<head>

<link rel="stylesheet" href="css/headerstyle.css"></link>


</head>
<body>
<div class="Container">
    <div class="logo-container">
    
        <div href="index.php" title="Fashionspark.com" class="logo">Fashion<span class="sub-logo">spar</span>k<span class="sub-logo1">.com</span></div>
    
    </div>
    <div class="items">
            
            <?php
                
                if(isset($_SESSION['email'])){
                    ?>
                      <div class="cart">  <a title="CART" href="cart.php" ><img src="icons/ShoppingCart_25px.png"></img></a></div>
                     <div class="logout">   <a title="LOGOUT" href="logout.php" ><img src="icons/LogoutRoundedLeft_25px.png"></img></a></div>

                <?php
                }else{
                    ?>
                    
                       <div class="signup"> <a title="SIGNUP" href="signup.php" ><img src="icons/User_32px.png"></img></a></div>
                      <div class="login"> <a title="LOGIN" href="login.php"> <img src="icons/Login_25px.png"></img></a></div>
                        
                      

               
        <?php
                }
                ?>
        </div>

</div>
</body>
</html>