<?php
session_start();
if(isset($_SESSION["ADMINISTRATOR"])){
    echo "Welcome administrator"."<br>";
    $uNAME = $_GET["uNAME"];
    $uPW = $_GET["uPW"];
    $uML = $_GET["uML"];
    $uCL = $_GET["uCL"];
    $uDT = $_GET["uDT"];
    $uWP = $_GET["uWP"];
    $uRG = $_GET["uRG"];
    $uSC = $_GET["uSC"];
    $uGD = $_GET["uGD"];
    $uIT = $_GET["uIT"];
    $uCT = $_GET["uCT"];
    $uCM = $_GET["uCM"];
    echo "Your name is : ".$uNAME."<br>";
    echo "Your password is : ".$uPW."<br>";
    echo "Your email is : ".$uML."<br>";
    echo "Your color is : ".$uCL."<br>";
    echo "Your birthday is : ".$uDT."<br>";
    echo "Your webpage is : ".$uWP."<br>";
    echo "Your grade about the web page is : ".$uRG."<br>";
    echo "Your gender is : ".$uGD."<br>";
    echo "Your secret is : ".$uSC."<br>";
    echo "Your interest are : "."<br>";
    foreach ($uIT as $i){
        echo $i."<br>";
    }
    echo "Your city is : ".$uCT."<br>";
    echo "Your comments:".nl2br(htmlentities($uCM));
}else if(isset($_SESSION["USER"])){
    header("Location:form_success.php");
}else{
    echo "illigal user";
    header("Refresh:3;url='login.php'");
}
?>
