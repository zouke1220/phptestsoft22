<?php
require "vendor/autoload.php";

$data = [
	'name' => 'zs',
	'age' => 18
];

$jsonData = \phptestsoft22\Json::encode($data);
print_r($jsonData);

$arrayData = \phptestsoft22\Json::decode($jsonData);
print_r($arrayData);