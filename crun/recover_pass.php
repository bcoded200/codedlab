<?php
require_once("function.php");
require_once("db.php");
require_once("session.php");

if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $security=$_POST['security'];
    $confirm_sec=$_POST['confirm_sec'];
    if(empty($email)&& empty($security)&& empty($confirm_sec)){
        echo "Cannot Submit An Empty  field!!";
            }else{
                global $conn;
                $query=("SELECT * FROM customers where email='$email'");
                $execute=mysqli_query($conn,$query);
                if($admin=mysqli_fetch_array($execute)){
                    $admin['name'];
                    $admin['token'];
                   // print_r($admin['name']);
                    //print_r($admin['token']);

                    $subject="Recover password";
                    $body="hi".$admin['name']."use this link to reset ur pass. http:localhost/crun/reset,.php/?token=".$admin['token'];
                    $from="bolivarp601@gmail.com";
                    if(mail($email,$subject,$body,$from)){
                     echo "check email for verification code";
                    }else{echo "We couldnt complete ur request";}
                }
            }
}


?>



<!doctype html>
<html>
<head>
<title>Recover Password</title>

<body>


<br />
  <div align="center">
<form action="recover_pass.php" method="post"/>
<label for="email">Email</label>
<input type="text" name="email" placeholder="Enter Your Email Address" /><br />
<label for="security">Security</label>
<input type="text" name="security" placeholder="Enter your security answer" /><br />
<label for="confirm_sec">Confirm Sec</label>
<input type="text" name="confirm_sec" id="confirm_sec" placeholder="Confirm Security Answer"/><br />
<input type="submit" name="submit" value="submit" />
</div>
</form>
</body>
</html>