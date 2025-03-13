<?php

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
echo "Your name is : ".$uNAME."<br>";
echo "Your password is : ".$uPW."<br>";
echo "Your email is : ".$uML."<br>";
echo "Your color is : ".$uCL."<br>";
echo "Your birthday is : ".$uDT."<br>";
echo "Your webpage is : ".$uWP."<br>";
echo "Your grade about the web page is : ".$uRG."<br>";
echo "Your gender is : ".$uGD."<br>";
echo "Your secret is : ".$uSC."<br>";
echo "Your interest are : ";
foreach ($uIT as $i){
    echo $i."<br>";
}
?>
