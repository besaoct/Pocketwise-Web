<?php
session_start();
ob_start();

$db = mysqli_connect('localhost', 'root', '', 'studentp') or die("Database is not connected");
if ($db) {
    $_SESSION['db'] = true;
    define('BASE_URL', 'http://localhost/pocketwise');

}else{
    $_SESSION['db'] = false;
}
// $url = 'http://localhost/studentportal-main/';
// $url = parse_url($url, PHP_URL_SCHEME) . '://' . parse_url($url, PHP_URL_HOST);
// $base_url = trim($url, '/');

