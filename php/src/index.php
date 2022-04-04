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

<?php include_once "model.php"; ?>
<?php include_once "controller.php"; ?>


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
} elseif ('/index.php/products' == $uri)
{
    $products = get_products();
    echo products($products);
} elseif ('/index.php/product' == $uri && isset($_GET['id']))
{
    echo product($_GET['id']);
} elseif ('/index.php/login' == $uri)
{
    echo login();
} elseif ('/index.php/panier' == $uri)
{
    echo panier();
} elseif ('/index.php/register' == $uri)
{
    echo register();
} elseif ('/index.php/admin/index' == $uri)
{
    echo admin_index();
} elseif ('/index.php/admin/admins' == $uri)
{
    echo admin_admins();
} elseif ('/index.php/admin/categories' == $uri)
{
    echo admin_categories();
} elseif ('/index.php/admin/products' == $uri)
{
    echo admin_products();
} else {
    echo index();
}
?>

<?php require_once "inc/footer.php"; ?>