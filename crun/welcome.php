<?php 
require_once("session.php");
require_once("function.php");
require_once("db.php");
notconfirm_login();
?>

<!doctype html>
<html>

<head><title>Welcome page</title>
</head>
<body>

<?php 
if(isset( $_SESSION['user_id'])){
echo "welcome\r\n".$_SESSION['user_id']."Your identification number is:".$_SESSION['user_id'];
/*if(isset($_COOKIE["cookie_name"])){
    echo "<h1>$_COOKIE[cookie_name]</h1>";
}*/

echo "<br>";
}
?>
<a href="logout.php"><h3>Logout</h3></a>
</body>
</html>