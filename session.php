<?php
session_start();
require_once("db.php");

function msg(){
    if(isset($_SESSION["msg"])){
        $result="<div class=\"msg\">";
$result.=htmlentities($_SESSION["msg"]);
$result.="</div>";
$_SESSION['msg']=null;
return $result;

    }
}

function error(){
    if(isset($_SESSION["error"])){
        $result="<div class=\"error\">";
$result.=htmlentities($_SESSION["error"]);
$result.="</div>";
$_SESSION['error']=null;
return $result;
    }
}
function success_message(){
    if(isset($_SESSION['success_message'])){
        $result ="<div class=\"success_message\">";
        $result .=htmlentities($_SESSION['success_message']);
        $result .="</div>";
    return $result;
    }
}
?>
