<?php
/**
 * MyClass File Doc Comment
 *
 * PHP version 8
 * 
 * @category MyClass
 * @package  Noblecodingacetyloxy
 * @author   Nicolas Barbarisi <nico.bar2012@gmail.com>
 * @license  https://github.com/ChrisBradford2/Acetyloxy/blob/main/LICENSE MIT
 * @link     http://www.hashbangcode.com/
 * @return   type mescouilles
 */
?>

<?php

/**
 * Fuction File Doc Comment
 *
 * PHP version 8
 * 
 * @category index
 * @package  Noblecodingacetyloxy
 * @author   Nicolas Barbarisi <nico.bar2012@gmail.com>
 * @license  https://github.com/ChrisBradford2/Acetyloxy/blob/main/LICENSE MIT
 * @link     http://www.hashbangcode.com/
 * @return   type controller
 */   
function index()
{
    require_once 'front/index.php';
}

function products($products)
{
    require_once 'front/products.php';
}

function product($id)
{
    require_once 'front/product.php';
}

function login()
{
    require_once 'front/login.php';
}

function register()
{
    require_once 'front/register.php';
}

function panier()
{
    require_once 'front/panier.php';
}

function admin_admins()
{
    require_once 'admin/admins.php';
}

function admin_categories()
{
    require_once 'admin/categories.php';
}
?>
