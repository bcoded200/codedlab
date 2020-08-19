<?php
require_once("session.php");
require_once("function.php");
$_SESSION["email"]=null;
$expiredtime=time()-1000;
           setcookie("cookie_name",null,$expiredtime);
session_destroy();
redirect_to("login.php");



?>