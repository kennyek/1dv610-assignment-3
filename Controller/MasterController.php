<?php

namespace Controller;

require_once 'Model/User.php';
require_once 'View/IView.php';
require_once 'View/HtmlViews/LayoutView.php';
require_once 'View/HtmlViews/FormViews/LoginFormView.php';

use Model\User;
use View\IView;
use View\HtmlViews\LayoutView;
use View\HtmlViews\FormViews\LoginFormView;

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
