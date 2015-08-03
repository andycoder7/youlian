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
// var_dump($wpdb);
$table = $wpdb->prefix . 'youlian_logs';
$data = $_POST;
$data['ip'] = get_client_ip();
$city = get_city($data['ip']);
$data['city'] = $city['city'] . $city['district'];
$data['create_time'] = date("Y-m-d H:i:s");
add_action('init', function() {
	// if (!isset($_COOKIE['my_cookie'])) {
		setcookie('my_cookie', 'some default value', strtotime('+1 day'));
	// }
});
setcookie("name", $_POST['name'], time()+3600, COOKIEPATH, COOKIE_DOMAIN, false);
setcookie("tel", $_POST['tel'], time()+3600,  COOKIEPATH, COOKIE_DOMAIN, false);
setcookie("email", $_POST['email'], time()+3600,  COOKIEPATH, COOKIE_DOMAIN, false);

$results = $wpdb->insert($table, $data);
var_dump($results);
// nocache_headers();
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
function get_city($ip = ''){
	if(empty($ip)){
		$ip = get_client_ip();
    }
	$res = @file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=' . $ip);
	if(empty($res)){ return false; }
	$jsonMatches = array();
	preg_match('#\{.+?\}#', $res, $jsonMatches);
	if(!isset($jsonMatches[0])){ return false; }
	$json = json_decode($jsonMatches[0], true);
	if(isset($json['ret']) && $json['ret'] == 1){
		$json['ip'] = $ip;
		unset($json['ret']);
    }else{
	    return false;
	}
	return $json;
}
exit;
