<?php
$the_host = $_SERVER['HTTP_HOST'];
$request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
if($the_host == 'http://test-sola233.a3c1.starter-us-west-1.openshiftapps.com')
{
header('HTTP/1.1 301 Moved Permanently');
header('Location: http://jb51.net'.$request_uri);//
}
?>
