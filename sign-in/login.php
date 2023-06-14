<?php

/*
    session
       - unset and destroy
       - login & logout simulation
*/

session_start();

// $_SESSION['name'] = "Mohammad";

// session_unset();    // reset the session
// session_destroy();  // delete the session

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST['user'] === "MohammadJ") {
        $_SESSION['username'] = "Joker";
        $_SESSION['id'] = 1005;
    }
}

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

if (isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'];
} else {

?>

    <form action="" method="post">
        <input type="text" name="user">
        <input type="submit" value="login">
    </form>

<?php } ?>

<a href="logout.php">logout</a>