<?php

ob_start();

$configs = [
	"path" => [
		"app" => [
			"models" => realpath(__DIR__."/../app/models"),
			"views" => realpath(__DIR__."/../app/views"),
			"services" => realpath(__DIR__."/../app/services"),
			"utils" => realpath(__DIR__."/../app/utils"),
		],
		"config" => realpath(__DIR__),
		"static" => realpath(__DIR__."/../static"),
		"public" => realpath(__DIR__."/../public"),
		"vendor" => realpath(__DIR__."/../vendor")
	]
];

# Connect DB
require_once $configs["path"]["config"]."/connect_db.php";

# Modules Include
require_once $configs["path"]["vendor"]."/autoloader.php";
autoloader();

# GENERAL DEFINITIONS
$GeneralViews = new App\Views\General($db);

/*
echo "<pre>";
print_r();
echo "</pre>";
*/
?>