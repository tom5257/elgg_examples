<?php
/**
 * Elgg Hello World plugin
 *
 * @package 
 */


elgg_register_event_handler('init', 'system', 'hello_world_init');

/**
 * Init function
 */
function hello_world_init() {
	elgg_register_page_handler('hello', 'hello_page_handler');	
	
	//add a menu item to primary site navigation
	$item = new ElggMenuItem('hello', 'Hello', 'hello/world');
	elgg_register_menu_item('site', $item);
	
	elgg_register_menu_item('page', array('name'=>'World', 'text'=>'Hello World', href=>'hello/world', 'contexts'=>array('hello'),));
	elgg_register_menu_item('page', array('name'=>'Dolly', 'text'=>'Hello Dolly', href=>'hello/dolly', 'contexts'=>array('hello'),));
	
	elgg_extend_view('hello_world/greetings', 'hello_world/pre_extend', '1');
	
// 	elgg_extend_view('page/elements/sidebar', 'hello_world/page/elements/info', '1');
}

function hello_page_handler($page, $identifier) {
	$plugin_path = elgg_get_plugins_path();
	$base_path = $plugin_path.'hello_world/pages/hello_world';
	switch ($page[0]) {
		case 'world':
			require("$base_path/world.php");
			break;
		case 'dolly':
			require("$base_path/dolly.php");
			break;
			
		default:
			echo "request for $identifier $page[0]";
	}
	
	return true;
}