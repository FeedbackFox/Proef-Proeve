<?php
include '..\tools\Log.php';
session_start();

// Checks if the CSRF token is the same as the Session token.
if (hash_equals($_SESSION['token'], $_POST['token'])) {
    echo "This worked";
} else {
    echo "This didn't work";
}
// Log::norm('Read', $_SESSION['Name'], 'login');
// Log::norm('Read', $_SESSION['Password'], 'Login');
// setcookie('Name', $_SESSION['name'], time()+ 60, '/');
// setcookie('Password', $_SESSION['password'], time()+ 60, '/');
?>

<!-- 
<h1><?php echo $_SESSION['Name'] ?></h1>
<h1><?php echo $_SESSION['Password'] ?></h1> -->