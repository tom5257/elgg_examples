<?php
	// We keep this for logged in users only
	gatekeeper();
	// Get the user
	$user = elgg_get_logged_in_user_entity();
	$icon = elgg_view_entity_icon($user, 'large', array('use_hover' => false));
	$title = elgg_echo('custompage:contact');
	// Get friends
	$options = array(
	    'type' => 'user',
	    "limit" => 100,
	    'relationship' => 'friend',
	    'relationship_guid' => elgg_get_logged_in_user_guid(),
	    'inverse_relationship' => false,
	    'full_view' => false,
	    'pagination' => false,
	    'size' => 'small',
	    'list_type' => 'gallery'
	);
	$friends = elgg_list_entities_from_relationship($options);
	// Latest 4 blog posts
	$params = array(
	    'type' => 'object',
	    'subtype' => 'blog',
	    'owner_guid' => $user->getGUID(),
	    'limit' => 4,
	    'full_view' => false
	);
	$blogs = elgg_list_entities($params);
	$vars = array(
	    'name' => $user->name,
	    'icon' => $icon,
	    'friends' => $friends,
	    'blogs' => $blogs
	);
	$content = elgg_view('custompage/content', $vars);
	$vars = array(
	    'content' => $content,
	);
	$body = elgg_view_layout('one_sidebar', $vars);
	echo elgg_view_page($title, $body);