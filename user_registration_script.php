<?php
require "connection.php";
session_start();
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email,$email)){?>
<script> window.alert("INCORRECT MAIL......"</script>
<?php
}
 
$password=(mysqli_real_escape_string($con,$_POST['password']));
if(strlen($password)<6){
    ?>
<script> window.alert("Password should have minimum 6 characters.")</script>
<?php
}
$contact=$_POST['contact'];
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$duplicate_user_query="select id from signup where email='$email'";
$duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
$rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        //duplicate registration
        //header('location: signup.php');
        ?>
        <script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />
        <?php
    }else{
        $user_registration_query="insert into signup(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));?>
        <script>
        window.alert("User successfully registered");</script>
        <?php
        $_SESSION['email']=$email;
        //The mysqli_insert_id() function returns the id (gen xerated with AUTO_INCREMENT) used in the last query.
        $_SESSION['id']=mysqli_insert_id($con); 
        //header('location: products.php');  //for redirecting
        ?>
        <meta http-equiv="refresh" content="0;url=index.php" />
        <?php
    }
    
?>