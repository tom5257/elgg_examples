<?php
	$title = "My second page";
	$params = array('name'=>'Dolly');
	
	$content = "Hello " . $user->name . "!";
	//$content = elgg_view('hello_world/greetings', $params);
	
	$vars = array('content'=>$content,);
	$body = elgg_view_layout('one_sidebar', $vars);
	echo elgg_view_page($title, $body);
