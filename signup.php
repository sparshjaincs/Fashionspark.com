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
    <div class="cont">
        <div class="rooww">
            <div class="sign">
                <p>SIGN UP</p>
         </div>    
         <div class="inputs">
         <form method="post" action="user_registration_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>
                            <div class="form-group"> 
                                <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true" pattern='[0-9]{10}'>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn-primary" value="Sign Up">
                            </div>
                        </form>
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