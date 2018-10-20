<?php

session_start();

// Display error messages.
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once 'Configs/App.php';
require_once 'Configs/AppSettings.php';

use Configs\{App, AppSettings};

$appSettings = new AppSettings();
$app = new App($appSettings);

$app->start();
