<?php
require_once __DIR__ . '/Router.php';
$request = $_SERVER['REQUEST_URI'];

//var_dump($request);
//die();

(new Router())->run($request);
