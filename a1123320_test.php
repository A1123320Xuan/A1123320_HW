<?php
session_start();
?>
<html>
<head></head>
<body>
<?php
if(isset($_SESSION["check"])){
    echo "Welcome"."<br>";
    echo "<a href = 'logout.php'>Logout</a><br>";
    echo "<form action='test2.php' method='GET' target='new'>";
    echo "Please input your name: <input type='text' name='uNAME' required><br>";
    echo "Please input your password: <input type='password' name='uPW' required><br>";
    echo "Please input your email: <input type='email' name='uML' required><br>";
    echo "Please select your color: <input type='color' name='uCL' required><br>";
    echo "Please select your birthday: <input type='date' name='uDT' required><br>";
    echo "Please input your webpage: <input type='url' name='uWP' required><br>";
    echo "Please select how do you like the webpage: <input type='range' name='uRG' required><br>";
    echo "Please select your gender: <input type='radio' name='uGD' value='male' required>male";
    echo "<input type='radio' name='uGD' value='female' required>female<br>";
    echo "<input type='hidden' name='uSC' value='LOL' required>";
    echo "Please select your interests:<br>";
    echo "<input type='checkbox' name='uIT[]' value='sport'>sport";
    echo "<input type='checkbox' name='uIT[]' value='music'>music";
    echo "<input type='checkbox' name='uIT[]' value='painting'>painting<br>";
    echo "Please select your city:";
    echo "<select name='uCT'>";
    echo "<option value='taipei'>Taipei</option>";
    echo "<option value='taichung'>Taichung</option>";
    echo "<option value='kaohsiung'>Kaohsiung</option>";
    echo "</select><br>";
    echo "Please input your comments:<br>";
    echo "<textarea cols='30' rows='10' name='uCM'></textarea><br>";
    echo "<input type='submit'><input type='reset'>";
    echo "</form>";
}else{
    echo "illigal user";
    header("Refresh:3;url='login.php'");
}
?>    
</body>

</html>
