<?php
require_once("header.php");
require_once("function.php");
require_once("session.php");

if(isset($_POST["submit"])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(empty($email)||empty($password)){
        echo "empty field";
    }elseif(check_email($email)){
        $found= login_atempt($email,$password);
        if($found){
           
            $_SESSION['user_id']=$found['id'];
            $_SESSION['user_name']=$found['name'];
            $_SESSION['user_email']=$found['email'];
            $expiredtime=time()+1000;
           setcookie("cookie_name",$email,$expiredtime);
          redirect_to("welcome.php");
        }else{
            $_SESSION["error"]= "access denied invalid email / password";
            redirect_to("login.php");
        }
    }
}

?>

<?php  echo msg(); ?>
<?php  echo error(); ?>
<section class="content">
			<div class="page_header">
				<h1>LOGIN</h1>
            </div>
            
			<div class="center">
				<div class="page_contact">
					
					<div class="contact">
                    <div class="alt">
<div align="center">
<form action="login.php" method="post">
<label for="name">Email</label>
<input type="text" name="email" id="email" /><br />
<label for="email">Password</label>
<input type="text" name="password" id="password" /><br />
<input type="checkbox" name="Remberme" />Remember Me <br />
<input type="submit" name="submit" value="Login" />
</form>
Not A Member?<a href="register.php">Register Here</a><br />
Lost Password? <a href="recover_pass.php">Recover Now</a>
Reset Password? <a href="reset.php">Reset Password</a>
</div>
</div>
</div>
</div>
</div>
</section>
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
.alt{
    width: auto;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: auto;
    margin: auto;
    margin-left: auto;
    margin-right:auto;
    text-align: center;
  }

</style>
<?php require_once("footer.php");?>