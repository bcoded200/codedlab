<?php
require_once("header.php");
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
$found=false;
$query=mysqli_query($conn, "SELECT * FROM customers WHERE confirm_sec='$confirm_sec'");
if($query){
    $sql=mysqli_fetch_assoc($query);
    if($sql){
        if($sql['confirm_sec']==$confirm_sec && $sql['email']==$email){
            $found=true;
        }
    }
   
}
if($found){
   $success= "	<div class=\"success_message\">hi\r\n\r\n".$sql['name']."\r\n\r\nThank You For Using This Reset Tool."."Your Old Password is ".$sql['confirm']."."."You Will be Redirected To The Login Page In 10 Seconds";
   echo "$success";
   echo "</div>";
   header("refresh:10; url=login.php");
}
   // $_SESSION['success_message']= "hi\r\n\r\n".$sql['name']."\r\n\r\nThank You For Using This Reset Tool."."Your Old Password is ".$sql['confirm']."."."You Will be Redirected To The Login Page In 10 Seconds";
    //echo 
    //header("refresh:10; url=login.php");
   
else{
    echo "Sorry\r\n\r\n".$sql['name']."\r\n\r\nWe Are Unable To Reset Your Password At This Time. Contact Management. You Will Be redirected To The contact page In 10 seconds.";
   header("refresh:20; url=contact.php");

}        
}
}

?>

<br />


<section class="content">
    
			<div class="page_header">
				<h1>Recover / Password</h1>
			</div>
			<div class="center">
				<div class="page_contact">
					
					<div class="contact">
                    
  <div align="center">

<form action="recover_pass.php" method="post"/>
<label for="email">Email</label>
<input type="text" name="email" placeholder="Enter Your Email Address" /><br />
<label for="security">Security</label>
<input type="text" name="security" placeholder="Enter your security answer" /><br />
<label for="confirm_sec">Confirm Sec</label>
<input type="text" name="confirm_sec" id="confirm_sec" placeholder="Confirm Security Answer"/><br />
Not A Member? <a href="register.php">Register Here</a><br />
<input type="submit" name="submit" value="submit" />
</div>
</div>
</div>
</div>
</section>
</form>
<?php require_once("footer.php") ?>