<?php
/**
 * Elgg Home Page plugin
 *
 * @package 
 */


elgg_register_event_handler('init', 'system', 'main_index_init');

/**
 * Init function
 */
function main_index_init() {
	// Replace the default index page
    elgg_register_plugin_hook_handler('index', 'system', 'new_index');
}

function new_index() {
	//$pDir = dirname(__FILE__) . "/pages/home_index.php";
	
	if(!include_once(dirname(__FILE__) . "/pages/home_index.php")) {
		return false;
	}
	
	return true;
	
	//return !include_once($pDir);
}