<?php

Autoloader::add_core_namespace('feed');

Autoloader::add_classes(array(
	'Feed\\Rss' => __DIR__  . '/classes/rss.php',
));
