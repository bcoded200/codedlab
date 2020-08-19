<?php
require_once("function.php");
require_once("db.php");
require_once("session.php");
if(isset($_GET['token'])){
    $rand_token=$_GET['token'];
    if(isset($_POST['submit'])){
        $password=mysqli_real_escape_string($conn,$_POST['password']);
        $confirm_pass=mysqli_real_escape_string($conn,$_POST['confirm_pass']);
        if(empty($password)&&empty($confirm_pass)){
            echo "Field cannot be empty";
        }elseif($password!=$confirm_pass){
            echo "passwords mismatch!";
            
        }else{
            global $conn;   
            $crypt=encrypt($password);
            $query="UPDATE customers SET password='$crypt' ,confirm='$confirm_pass'  where token='$rand_token' ";
            $inject=mysqli_query($conn,$query);

            $subject="Password Changed";
            $body="";
            $from="";

            if($inject){
                echo "password updated successfully";
               
            }else{
                echo "We could not change your password at this time, try again latter";
            }
        }
    }
}


?>
<!doctype html>
<html>
<head>
<title>Recover Password</title>
<body>
<?php  //echo msg(); ?>
<?php  //echo error(); ?>
<div align="center">
<form method="post" action="recover.php?token=<?php echo $rand_token?>">
<label for="password">password</label>
<input type="text" name="password" id="password" /><br />
<label for="confirmpassword">Confirm password</label>
<input type="text" name="confirm_pass" id="confirm_pass" /><br />
<input type="submit" name="submit" id="submit" />
<form>
</div>



<style>
.msg{
    background-color: green;
    font-family:Times;
    color:white;
    width:auto;
}
div{
    float:center;
    width: auto;
}
.error{
    background-color:red;
    font-family:Times;
}
</style>


</body>
</htmL>