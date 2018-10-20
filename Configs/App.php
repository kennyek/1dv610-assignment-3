<?php

namespace Configs;

require_once 'Configs/AppSettings.php';
require_once 'Controllers/MasterController.php';
require_once 'Models/User.php';
require_once 'Models/Username.php';
require_once 'Models/Password.php';
require_once 'Views/HtmlViews/LayoutView.php';

use Controllers\MasterController;
use Models\{User, Username, Password};
use Views\HtmlViews\LayoutView;

class App
{
    /** @var AppSettings */
    private $settings;

    public function __construct(AppSettings $settings)
    {
        $this->settings = $settings;
    }

    public function start()
    {
        $username = new Username('');
        $password = new Password('');
        $user = new User($username, $password);

        $view = new LayoutView($user);

        $controller = new MasterController($view, $user);
        $controller->response();
    }
}
