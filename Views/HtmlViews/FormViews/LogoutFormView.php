<?php

namespace Views\HtmlViews\FormViews;

require_once 'Views/HtmlViews/FormViews/AbstractFormView.php';

class LogoutFormView extends AbstractFormView
{
    private static $logout = 'LogoutView::Logout';
    private static $messageId = 'LogoutView::Message';

    public function getContent(string $feedback = ''): string
    {
        return '
			<form method="post">
				<p id="' . self::$messageId . '">' . $feedback . '</p>
				<input type="submit" name="' . self::$logout . '" value="logout" />
			</form>
		';
    }
}
