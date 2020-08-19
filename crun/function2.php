<?
require_once "db.php";
require_once("session.php");



function redirect_to($violation){
    header("location:". $violation);
    exit;
}

function encrypt_1($password){
    $blowfish_format="$2y$10$";
    $salt_lenght="30";
    $salt=generate($salt_lenght);
    $rand_gen=$blowfish_format.$salt;
    $hash=crypt($password,$rand_gen);
    return $hash;
}

function generate_security($salt_lenght){
  $uniqid=md5(uniqid(mt_rand(), true));
  $encode=base64_encode($uniqid);
  $modify=str_replace('+','.', $encode);
  $rand=substr($modify,0,$salt_lenght);
  return $rand;
}
function check_sec($security,$check_sec){
  $rand_sec=crypt($security,$check_sec);
  if($rand_sec===$check_sec){
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
?>