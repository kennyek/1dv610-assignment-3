<?php

namespace Config;

require_once 'Config/AppSettings.php';
require_once 'Controller/MasterController.php';
require_once 'Model/User.php';
require_once 'Model/Username.php';
require_once 'Model/Password.php';
require_once 'View/HtmlViews/LayoutView.php';

use Controller\MasterController;
use Model\{User, Username, Password};
use View\HtmlViews\LayoutView;

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
