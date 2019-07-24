<html>
<head>

<link rel="stylesheet" href="css/signup.css"></link>
<link rel="stylesheet" href="css/style.css"></link>

</head>
<body>
<div>
    <?php
    require "header1.php"
    ?>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="cont" style="height:400px;">
        <div class="rooww">
            <div class="sign">
                <p style="margin-left:25px;">LOGIN</p>
               
         </div> 
         <p style="font-size:20px;margin-left:55px;margin-top:-15px;">Login to make purchase.</p>   
         
         <div class="inputs">
         <form method="post" action="login-submit.php">
                            
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" class="btn-primary" value="Login">
                            </div>
                        </form>
                        <div style="font-size:20px;margin-left:55px;margin-top:-10px;">Don't have an account yet? <a href="signup.php">Register</a></div>
        </div>
        </div>
</div>




<footer>
    <?php
        require "footer.php"
    ?>
</footer>
</body>
</html>