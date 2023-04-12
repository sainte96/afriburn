<?php
// Main Configuration File
// All global definations are done here. Database connection is also initialised
 // --------------- //
if (session_status() == PHP_SESSION_NONE) {
		session_start();
}
 // set default time zone
date_default_timezone_set('Africa/Lagos');

// Here we get the current url 
define('URL', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

// Other default definations
define('SITE_NAME', 'Afriburn');
define('SITE_EMAIL', 'ask.afriburn.ng');
define('SITE_URL', 'https://afriburn.ng');
//define('SUPER_ADMIN_EMAIL', '');

// GET USER IP ADDRESS
function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}
define('USER_IP', getUserIP());

// sending email variables
define('MAIL_SEND_SERVER', 'afriburn.ng');
define('MAIL_FROM', 'ask@afriburn.ng');

/**
 * Configuration for: Database
 * This is the place where database credentials, database type etc is defined.
 */
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'afriuvkf_afriburn');
define('DB_USER', 'afriuvkf_afriburn');
define('DB_PASS', 'HtfQ8TI14LZM');
define('DB_CHARSET', 'utf8');

// Function that instantiate database connection
class config {
public static function dbcon() {
$db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET, DB_USER, DB_PASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
return $db;
}
}

// include the database insert model
	include('db_insert.php');

// include core functions
	include('core_functions.php');

// put database connection in var $db
	$db=config::dbcon();
?>
