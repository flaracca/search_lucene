<?php

if (!defined('PHPUNIT_RUN')) {
	define('PHPUNIT_RUN', 1);
}

require_once __DIR__.'/../../../../lib/base.php';

if(!class_exists('PHPUnit_Framework_TestCase')) {
	require_once('PHPUnit/Autoload.php');
}

require_once __DIR__ . '/../../3rdparty/autoload.php';

OC_Hook::clear();
