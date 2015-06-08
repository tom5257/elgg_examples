<?php
	elgg_register_event_handler('init', 'system', 'custompage_init');
	
	function custompage_init() {
	
	    // Register a pagehandler
	    elgg_register_page_handler('custompage', 'custompage_page_handler');
	
	    // Add a menu item to the main site menu
	    elgg_register_menu_item('site', ElggMenuItem::factory(array(
	        'name' => 'custompage',
	        'href' => '/custompage',
	        'text' => elgg_echo('custompage:custompage'),
	    )));
	    
	    elgg_extend_view('css/elgg', 'custompage/css');
	}
 
	function custompage_page_handler($page, $handler) {
	    if (!isset($page[0])) {
	        $page[0] = 'index';
	    }
	    $plugin_path = elgg_get_plugins_path();
	    $pages = $plugin_path . 'custompage/pages/custompage';
	    switch ($page[0]) {
	        case 'index':
	            include "$pages/index.php";
	            break;
	        default:
	            return false;
	    }
	    return true;
	}
	