<?php

session_start();

// Display error messages.
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once 'Config/App.php';
require_once 'Config/AppSettings.php';

use Config\{App, AppSettings};

$appSettings = new AppSettings();
$app = new App($appSettings);

$app->start();
