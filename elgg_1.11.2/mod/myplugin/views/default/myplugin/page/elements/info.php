<?php
	$title = elgg_echo('myplugin:title');
	$content = elgg_echo('myplugin:text');
	echo elgg_view_module('featured', $title, $content);