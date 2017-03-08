<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	'type' => 'MySQLDatabase',
	'server' => 'localhost',
	'username' => 'root',
	'password' => 'Jorgen_1993',
	'database' => 'SS_freelance',
	'path' => ''
);

Director::set_environment_type("dev");
Director::setBaseURL('/freelance/');
// Set the site locale
i18n::set_locale('en_US');
Security::setDefaultAdmin('flash', 'Jorgen_1993');
