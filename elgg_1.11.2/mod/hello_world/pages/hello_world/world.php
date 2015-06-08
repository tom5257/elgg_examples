<?php
	$user = elgg_get_logged_in_user_entity();
	
	$title = "My first page";
	
	$params = array('name'=>$user->name);
	
// 	$content = "Hello " . $user->name . "!";
	
	elgg_extend_view('hello_world/greetings', 'hello_world/pre_extend', '1');
	
	$content = elgg_view('hello_world/greetings', $params);
	
	$vars = array('content'=>$content,);
	$body = elgg_view_layout('one_sidebar', $vars);
	echo elgg_view_page($title, $body);
