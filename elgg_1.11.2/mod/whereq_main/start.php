<?php
/**
 * Elgg WhereQ Main plugin
 *
 * @package 
 */



/**
 * Init function
 */
function main_index_init() {
	// Replace the default index page
    elgg_register_plugin_hook_handler('index', 'system', 'new_index');
}

function new_index() {
	$pDir = dirname(__FILE__) . "/pages/whereq_index.php";
	
	return !include_once($pDir);
}

elgg_register_event_handler('init', 'system', 'main_index_init');
