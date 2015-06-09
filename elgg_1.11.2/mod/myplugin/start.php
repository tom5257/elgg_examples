<?php
/**
 * Elgg Hello World plugin
 *
 * @package 
 */


register_elgg_event_handler('init','system','myplugin_init');
 
function myplugin_init() {
	//global $CONFIG;
	//set_view_location('page/elements', $CONFIG->pluginspath . 'myplugin/page/elements');	
	
    elgg_unregister_menu_item('topbar', 'elgg_logo');
    
    $logo_url = elgg_get_site_url() . "mod/myplugin/graphics/garfield.jpg";
    elgg_register_menu_item('topbar', array(
    		'name' => 'my_logo',
    		'href' => 'http://www.whereq.com/',
    		'text' => "<img src=\"$logo_url\" alt=\"My logo\" width=\"38\" height=\"20\" />",
    		'priority' => 1,
    		'link_class' => 'elgg-topbar-logo',
    ));
    
    elgg_extend_view('page/elements/sidebar', 'myplugin/page/elements/info', '1');
    
    
}
