<?php
/**
 * PHP version 5
 *
 * @category Main
 * @package  Noblecodingacetyloxy
 * @author   Nicolas Barbarisi <nico.bar2012@gmail.com>
 * @license  https://github.com/ChrisBradford2/Acetyloxy/blob/main/LICENSE MIT
 * @link     http://pear.php.net/package/PackageName
 */
?>

<?php require_once "controller.php"; ?>


<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (strpos($uri, "admin") !== false) {
    include_once "inc/header_admin.php";
} else {
    include_once "inc/header.php";
}

/* The MySQL service named in the docker-compose.yml.*/
$host = 'db';

// Database use name
$user = 'palpatine';

//database user password
$pass = 'execute_order66';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo '<script type="text/javascript">' .
    'console.log("Connected to MySQL server successfully!");</script>';
}
if ('/index.php' == $uri) {
    echo index();
} else {
    echo index();
}
?>

<?php require_once "inc/footer.php"; ?>