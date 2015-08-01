<?php
if ( 'POST' != $_SERVER['REQUEST_METHOD'] ) {
	header('Allow: POST');
	header('HTTP/1.1 405 Method Not Allowed');
	header('Content-Type: text/plain');
	exit;
}
require( dirname(__FILE__) . '/wp-load.php' );

wp_die( __( 'Sorry, comments are closed for this item.' ), 200 );
nocache_headers();
return 222;
var_dump($_POST);
exit;
