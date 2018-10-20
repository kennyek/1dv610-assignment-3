<?php

namespace View\HtmlViews\FormViews;

require_once 'View/HtmlViews/FormViews/AbstractFormView.php';

class LoginFormView extends AbstractFormView
{
    private static $login = 'LoginView::Login';
    private static $name = 'LoginView::UserName';
    private static $password = 'LoginView::Password';
    private static $keep = 'LoginView::KeepMeLoggedIn';
    private static $messageId = 'LoginView::Message';

    public function getContent(string $feedback = '', string $username = ''): string
    {
        return '
            <form method="post">
                <fieldset>
                    <legend>Login - enter Username and password</legend>
                    <p id="' . self::$messageId . '">' . $feedback . '</p>

                    <label for="' . self::$name . '">Username :</label>
                    <input type="text" id="' . self::$name . '" name="' . self::$name . '" value="' . $username . '" />

                    <label for="' . self::$password . '">Password :</label>
                    <input type="password" id="' . self::$password . '" name="' . self::$password . '" />

                    <label for="' . self::$keep . '">Keep me logged in  :</label>
                    <input type="checkbox" id="' . self::$keep . '" name="' . self::$keep . '" />

                    <input type="submit" name="' . self::$login . '" value="login" />
                </fieldset>
            </form>
        ';
    }
}
