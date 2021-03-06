<?php

namespace Croogo\Menus\Config;

use Croogo\Croogo\CroogoNav;

CroogoNav::add('sidebar', 'menus', array(
	'icon' => array('sitemap', 'large'),
	'title' => __d('croogo', 'Menus'),
	'url' => array(
		'prefix' => 'admin',
		'plugin' => 'Croogo/Menus',
		'controller' => 'Menus',
		'action' => 'index',
	),
	'weight' => 20,
	'children' => array(
		'menus' => array(
			'title' => __d('croogo', 'Menus'),
			'url' => array(
				'prefix' => 'admin',
				'plugin' => 'Croogo/Menus',
				'controller' => 'Menus',
				'action' => 'index',
			),
			'weight' => 10,
		),
	),
));
