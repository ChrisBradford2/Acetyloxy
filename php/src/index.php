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
    echo "Connected to MySQL server successfully!";
}
?>
