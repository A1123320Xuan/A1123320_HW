<?php
session_start();
$defaultNM = "NUK";
$defaultPSW = "12345";
$uNM = $_POST["uNM"];
$uPSW = $_POST["uPSW"];
if($defaultNM == $uNM && $defaultPSW == $uPSW){
    echo "Login success";
    $_SESSION["check"] = 1;
    setcookie("uNM",$defaultName,time()+10);
    header("Location:a1123320_test.php");
}else{
    echo "Login fail , will send you back to login";
    header("Refresh:3;url = 'login.php'");
}
?>