<?php
include '..\tools\Log.php';
session_start();

// Checks if the CSRF token is the same as the Session token.
if (hash_equals($_SESSION['token'], $_POST['token'])) {
    echo "This worked";
} else {
    echo "This didn't work";
}
Log::norm('Read', $_COOKIE['Name'], 'login');
Log::norm('Read', $_COOKIE['Password'], 'Login');
?>


<h1><?php echo $_COOKIE['Name'] ?></h1>
<h1><?php echo $_COOKIE['Password'] ?></h1>