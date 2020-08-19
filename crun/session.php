<?php
session_start();
require_once("db.php");

function msg(){
    if(isset($_SESSION["msg"])){
        $result="<div class=\"msg\">";
$result.=htmlentities($_SESSION["msg"]);
$result.="</div>";
return $result;
    }
}

function error(){
    if(isset($_SESSION["error"])){
        $result="<div class=\"error\">";
$result.=htmlentities($_SESSION["error"]);
$result.="</div>";
return $result;
    }
}
?>
