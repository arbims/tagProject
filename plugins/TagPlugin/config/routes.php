<?php

use Cake\Routing\RouteBuilder;

$routes->plugin(
	'TagPlugin',
	['path' => '/tags'],
	function (RouteBuilder $routes) {
    $routes->setExtensions(['json', 'xml']);
		$routes->connect('/', ['controller' => 'Tags', 'action' => 'index']);
	}
);
