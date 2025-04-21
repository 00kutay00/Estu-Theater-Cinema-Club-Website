<?php

function autoloader() {
	global $configs;
	
	$models = scandir($configs["path"]["app"]["models"]);
	$views = scandir($configs["path"]["app"]["views"]);
	$services = scandir($configs["path"]["app"]["services"]);
	
	foreach ($models as $file) {
		if ($file !== '.' && $file !== '..') {
			require_once( $configs["path"]["app"]["models"]."/".$file );
		}
	}
	foreach ($views as $file) {
		if ($file !== '.' && $file !== '..') {
			require_once( $configs["path"]["app"]["views"]."/".$file );
		}
	}
	foreach ($services as $file) {
		if ($file !== '.' && $file !== '..') {
			require_once( $configs["path"]["app"]["services"]."/".$file );
		}
	}
}

?>