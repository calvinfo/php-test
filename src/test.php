<?php

/**
 * Initialize the library
 */

date_default_timezone_set('America/Los_Angeles');
require_once("./analytics/lib/Segment.php");
class_alias('Segment', 'Analytics');

Analytics::init("testsecret", array(
	"debug" => true,
	"error_handler" => function($code, $msg) { 
		error_log("error_log: " . $code . " " . $msg); 
	}
));

/**
 * Create a random user to identify.
 */

$user = "user-" . rand();

Analytics::identify(array(
  "userId" => $user,
  "traits" => array(
    "name" => "Michael Bolton",
    "email" => "mbolton@initech.com"
  )
));

echo "User: $user";
?>