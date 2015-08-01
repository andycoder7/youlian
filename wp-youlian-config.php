<?php
if ( 'POST' != $_SERVER['REQUEST_METHOD'] ) {
	header('Allow: POST');
	header('HTTP/1.1 405 Method Not Allowed');
	header('Content-Type: text/plain');
	exit;
}
require( dirname(__FILE__) . '/wp-load.php' );

// var_dump($_POST);
global $wpdb;
var_dump($wpdb);
$table = $wpdb->prefix . 'youlian_logs';
$data = $_POST;
$data['ip'] = get_client_ip();
$data['create_time'] = date("Y-m-d H:i:s");
setcookie("name", $_POST['name'], time()+3600, COOKIEPATH, COOKIE_DOMAIN, false);
setcookie("tel", $_POST['tel'], time()+3600,  COOKIEPATH, COOKIE_DOMAIN, false);
setcookie("email", $_POST['email'], time()+3600,  COOKIEPATH, COOKIE_DOMAIN, false);

$results = $wpdb->insert($table, $data);
var_dump($results);
nocache_headers();
function get_client_ip() {
    if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
        $ip = getenv("HTTP_CLIENT_IP");
    else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"),
	"unknown"))
        $ip = getenv("HTTP_X_FORWARDED_FOR");
    else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
        $ip = getenv("REMOTE_ADDR");
    else if (isset ($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR']
		&& strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
        $ip = $_SERVER['REMOTE_ADDR'];
    else
        $ip = "unknown";
    return ($ip);
}
return 222;
var_dump($_POST);
exit;
