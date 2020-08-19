<?php 
include_once("header.php");
echo "<br>";
echo "<br>";
require_once("session.php");
require_once("function.php");
require_once("db.php");
notconfirm_login();
ob_start();
?>


<div class="alt">
<?php 

//header("refresh:5; url=index.php");
if(isset( $_SESSION['user_id'])){
    $success= "	<div class=\"success_message\">welcome\r\n".$_SESSION['user_name']."::\r\n\r\nYour identification number is:".$_SESSION['user_id']."You Will Be redirected To The Main Page In  20sec !";
   echo "$success";
   echo "</div>";
   header("refresh:20; url=index.php");
/*echo "welcome\r\n".$_SESSION['user_name']."::\r\n\r\nYour identification number is:".$_SESSION['user_id']."You Will BE redirected in 5sec to the mainpage";
/*if(isset($_COOKIE["cookie_name"])){
    echo "<h1>$_COOKIE[cookie_name]</h1>";
}*/

//echo "<br>";
}
?>
</div>
<style>
    .eti{
        background-color:red;
    }
.alt{
    width: auto;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: auto;
    margin: auto;
    text-align: center;
    padding: 250px;
    padding-top:4em;
    border:3px solid #3939;
  }
  .button{float:left;
    background-color: #59d16b; 
    padding: 10px 20px; 
    color:#fff; 
    font-size: 16px; 
    border:none; 
    cursor: pointer; 
    outline:none; 
    margin:10px 0;
    position:absolute;
}

    </style>

<?php require_once("footer.php");?>