<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	'type' => 'MySQLDatabase',
	'server' => 'localhost',
	'username' => 'root',
	'password' => 'root',
	'database' => 'SS_mysite',
	'path' => ''
);

Director::set_environment_type('dev');
// Set the site locale
i18n::set_locale('en_US');
