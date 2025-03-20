<?php
session_start();
$adminNM = "NUK";
$adminPSW = "12345";
$userNM = "nuk";
$userPSW = "54321";
$uNM = $_POST["uNM"];
$uPSW = $_POST["uPSW"];
$uST = $_POST["uST"];
if($userNM == $uNM && $userPSW == $uPSW && $uST = "user"){
    echo "User login success";
    $_SESSION["USER"] = 1;
    $_SESSION["ADMINISTRATOR"] = null;
    setcookie("uNM",$userName,time()+5,"/");
    header("Location:form.php");
}else if($adminNM = $uNM && $adminPSW == $uPSW && $uST = "administrator"){
    echo "Administrator login success";
    $_SESSION["ADMINISTRATOR"] = 1;
    setcookie("uNM",$adminName,time()+5,"/");
    header("Location:admin.php");
}else{
    echo "Login fail , will send you back to login";
    header("Refresh:3;url = 'login.php'");
}
?>