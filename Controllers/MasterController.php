<?php

namespace Controllers;

require_once 'Models/User.php';
require_once 'Views/IView.php';
require_once 'Views/HtmlViews/LayoutView.php';
require_once 'Views/HtmlViews/FormViews/LoginFormView.php';

use Models\User;
use Views\IView;
use Views\HtmlViews\LayoutView;
use Views\HtmlViews\FormViews\LoginFormView;

class MasterController
{
    /** @var LayoutView */
    private $layoutView;

    /** @var User */
    private $currentUser;

    public function __construct(IView $layoutView, User $user)
    {
        $this->layoutView = $layoutView;
        $this->user = $user;
    }

    public function response()
    {
        return $this->layoutView->render(new LoginFormView());
    }
}
