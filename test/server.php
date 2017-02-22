<?php namespace PhpConsole\Test;

error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);

const IS_SERVER = true;

require_once(__DIR__ . '/bootstrap.php');

if(!isset($_SERVER['REMOTE_ADDR']) || $_SERVER['REMOTE_ADDR'] != '192.168.0.29') {
	throw new \Exception('Connection to test server allowed only from local IP');
}

Remote\Test::getClientEmulator()->handleClientEmulatorRequest();
