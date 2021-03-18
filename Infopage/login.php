<?php
include '..\tools\Log.php';
// Variable to change the type of hashing used. (Change place to more secure location if actively used)
$hash = 'ripemd160';

// Starts up a Session when the user logges in.
session_start();
if (isset($_REQUEST['submit'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['password'] = hash($hash, $_POST['password']);
}

// Generates a CSRF token together with a SESSION token.
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(31));
}
$token = $_SESSION['token'];

// Sets the Cookies of name and password.
setcookie('Name', $_SESSION['name']);
setcookie('Password', $_SESSION['password']);
?>

<form action="read.php" method="POST">
    <label for="name"> <input type="text" name="name" placeholder="username"></label>
    <label for="password"><input type="password" name="password" placeholder="password"></label>
    <button type="submit" name="submit">Submit</button>
    <input type="hidden" name="token" value="<?php echo $token ?>"/>
</form>