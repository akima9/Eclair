<?php

require_once "./vendor/autoload.php";

use Eclair\Http\Request;

// $_SERVER['REQUEST_METHOD'] = "GET";
$_SERVER['PATH_INFO'] = "/posts/test";

// var_dump(Request::getMethod());
var_dump(Request::getPath());