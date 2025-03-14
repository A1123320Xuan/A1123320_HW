<?php
if (isset($_COOKIE["uNM"])) {
    echo "Welcome back, " . $_COOKIE["uNM"];
} else {
    echo "<h1>Please login to use the system</h1>";
    echo '<form action="logincheck.php" method="POST" target="new">';
    echo 'Please input your username: <input type="text" name="uNM" required><br>';
    echo 'Please input your password: <input type="password" name="uPSW" required><br>';
    echo '<input type="submit"><input type="reset">';
    echo '</form>';
    echo date('Y-m-d H:i:s');
}
?>
