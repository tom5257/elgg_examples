<?php
	/**
	 * Custom Page content
	 *
	 * @uses $vars['name']    The name of a user
	 * @uses $vars['blogs']    Latest 4 blog posts by the user
	 *
	 */
	$class = array('class' => 'ptm elgg-divide-bottom');
	$hello = elgg_echo('custompage:user', array($vars['name']));
	echo elgg_view_title($hello, $class);
	$icon = elgg_echo($vars['icon']);
	$title = elgg_echo('friends');
	$content = elgg_echo($vars['friends']);
	echo '<div>';
	echo elgg_view_module('custompage icon', '', $icon);
	echo elgg_view_module('custompage', $title, $content);
	echo '</div>';
	$title = elgg_echo('blog');
	if($vars['blogs']) {
		$content = elgg_echo($vars['blogs']);
	} else {
		$content = elgg_echo('custompage:noblogs');
	}
	echo '<div>';
	echo elgg_view_module('custompage', $title, $content);
	echo '</div>';