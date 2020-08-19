<?php  
require_once("function.php");
require_once("db.php");
require_once("session.php");
require_once("");
  

if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $confirm=$_POST["confirm"];
    $security=$_POST['security'];
    $confirm_sec=$_POST['confirm_sec'];
    $token=bin2hex(openssl_random_pseudo_bytes(20));
    $_SERVER['REMOTE_ADDR'];
    $ip_address=$_SERVER['REMOTE_ADDR'];
    if(empty($name)&& empty($email)&& empty($password)&& empty($confirm)&& empty($security)&& empty($confirm_sec)){
       $_SESSION["msg"]="Field cannot be empty or incorrect";
       
    }elseif(strlen($password)<4){
        $_SESSION["error"]="password lenght must be greaater than 4";
    }elseif(check_email($email)){
        $_SESSION["error"]="Email alerady exisit try another email";
    }elseif(check_name($name)){
        $_SESSION["error"]="Name alerady exisit try another name";
    }elseif($password!==$confirm){
        $_SESSION["error"]="both passwords do not match";
    }
    
    
    else{
        global $conn;
        $crypt=encrypt($password);
        $coded=encrypt($security);
        $_SERVER['REMOTE_ADDR']=$ip_address;
        $ip_address=$_SERVER['REMOTE_ADDR'];
        $query="INSERT INTO customers(name,email,password,confirm,security,confirm_sec,ip_address,token,active)VALUES('$name','$email','$crypt','$confirm','$coded','$confirm_sec','$ip_address','$token','OFF')";
        $inject=mysqli_query($conn,$query);
        if($inject){
          
            $subject="Confirmation email";
            $body="hi".$name."click the link to verify ur acc http://localhost/crun/verify.php?token=".$token;
                $from="info@cyber.sec";
                if(mail($email,$subject,$body,$from));
                $_SESSION["msg"]="welcome\r\n\r\n"."\r\n\r\n".$name."."."check email for verification code";
        }else{
            $_SESSION["error"]="Technical Error Please Contact Support";
        }
    }
}

?>  



<?php  echo msg(); ?>
<?php  echo error(); ?>
<div align="center">
<form method="post" action="index.php">
<label for="name">Name</label>
<input type="text" name="name" id="name" /><br />
<label for="email">Email</label>
<input type="text" name="email" id="email" /><br />
<label for="password">Password</label>
<input type="text" name="password" id="password" /><br />
<label for="confirm">Confirm</label>
<input type="text" name="confirm" id="confirm" /><br />
<label for="security">Security Quest</label>
<input type="text" name="security" id="security" /><br />
<label for="confirm_sec">Confirm Sec</label>
<input type="text" name="confirm_sec" id="confirm_sec" /><br />
<input type="text"  name="ip_address" id="ip_address" placeholder="<?php echo $_SERVER['REMOTE_ADDR'];?> "disabled /><br />
<input type="submit" name="submit" id="submit" />
<form>
<br />
Alerady A Member? <a href="login.php">Login here</a>
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
<?php require_once("/fitness/header.php");?>

