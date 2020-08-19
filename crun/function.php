<?php
require_once "db.php";
require_once("session.php");



function redirect_to($violation){
    header("location:". $violation);
    exit;
}

function encrypt($password){
    $blowfish_format="$2y$10$";
    $salt_lenght="30";
    $salt=generate($salt_lenght);
    $rand_gen=$blowfish_format.$salt;
    $hash=crypt($password,$rand_gen);
    return $hash;
}
function generate($salt_lenght){
    $uniqid=md5(uniqid(mt_rand(), true));
    $encode=base64_encode($uniqid);
    $modify=str_replace("+",".",$encode);
    $rand_hash=substr($modify,0,$salt_lenght);
    return $rand_hash;
}
function check_hash($password,$che_ck){
    $rand_crypt=crypt($password,$che_ck);
    if($rand_crypt===$che_ck){
        return true;
    }else{
        return false;
    }
}
function check_email($email){
    global $conn;
    $query="SELECT * FROM customers where email='$email'";
    $execute=mysqli_query($conn,$query);
    if(mysqli_num_rows($execute)>0){
        return true;
    }else{
        return false;
    }
}
function check_name($name){
    global $conn;
    $query="SELECT * FROM customers where name='$name'";
    $execute=mysqli_query($conn,$query);
    if(mysqli_num_rows($execute)>0){
        return true;
    }else{
        return false;
    }
}
function check_active_email($email){
    global $conn;
    $query="SELECT * FROM customers where active='ON'";
    $inject=mysqli_query($conn,$query);
    if(mysqli_num_rows($inject)>0){
return true;
    }else{
        return false;
    }
}
function login_atempt($email,$password){
    global $conn;
    $query="SELECT * FROM customers where email='$email'";
    $inject=mysqli_query($conn,$query);
    if($admin=mysqli_fetch_assoc($inject)){
    if(check_hash($password,$admin['password'])){
        return $admin;
    }else{
        return null;
    }
}
}




function confirm(){
if(isset($_SESSION["user_email"])|| isset($_COOKIE["cokie_name"])){
    return true;
}
}

function notconfirm_login(){
    if(!confirm($_SESSION["user_email"])){
        $_SESSION["error"]="you must login to access this page";
        redirect_to("login.php");
    }
}
//security question function starts here

//security question encryption ends <here class=""></here>
function check_security($confirm_sec,$email){
 global $conn;
 //extract correct information from database and check the security question
 $found=false;
 $query=mysqli_query($conn,"SELECT * FROM customers where confirm_sec='$confirm_sec'");
 if($query){
     $row=mysqli_fetch_assoc($query);
     if($row){
         if($row['confirm_sec']==$confirm_sec && $row['email']== $email){
             $found=true;
         }
     }
 }
    if($found){
       // $_SESSION["msg"]="hi".$row['name']."Your old password is".$row['confirm']."Thank You For using this tool.";
       echo "hi".$row['name']."Your old password is".$row['confirm']."Thank You For using this tool.";
    }else{
        echo "Sorry We could Not Retrive Your Password using the details You provide.";
    }
}
?>