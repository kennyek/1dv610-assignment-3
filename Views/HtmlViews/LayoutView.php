<?php

namespace Views\HtmlViews;

require_once 'Models/IReadOnlyUser.php';
require_once 'Views/IContentView.php';
require_once 'Views/IView.php';
require_once 'Views/HtmlViews/DateTimeView.php';

use Models\IReadOnlyUser;
use Views\HtmlViews\DateTimeView;
use Views\IContentView;
use Views\IView;

class LayoutView implements IView
{
    /** @var DateTimeView */
    private $dateTimeView;

    /** @var string */
    private $currentUser;

    public function __construct(IReadOnlyUser $user)
    {
        $this->dateTimeView = new DateTimeView();
    }

    public function render(IContentView $contentView)
    {
        echo $this->layoutHtml($contentView);
    }

    private function layoutHtml(IContentView $contentView): string
    {
        return '
            <!DOCTYPE html>
            <html>

            <head>
            <meta charset="utf-8">
            <title>Login Example</title>
            </head>

            <body>
            <h1>Assignment 3</h1>

            ' . $this->navigationLinkHtml() . '
            ' . $this->isLoggedInHtml() . '

            <div class="container">
                ' . $contentView->getContent('Hello') . '
                ' . $this->dateTimeView->getHtml() . '
            </div>
            </body>

            </html>
        ';
    }

    public function isRegisterPage(): bool
    {
        return isset($_GET['register']);
    }

    private function navigationLinkHtml(): string
    {
        $href = $this->hrefForNavigationLink();
        $content = $this->contentForNavigationLink();

        return $this->getComposedHrefAndContent($href, $content);
    }

    private function hrefForNavigationLink(): string
    {
        $href = $this->currentUrl();

        if (!$this->isRegisterPage()) {
            $href .= '?register';
        }

        return $href;
    }

    private function currentUrl(): string
    {
        return dirname($_SERVER['SCRIPT_NAME']);
    }

    private function contentForNavigationLink(): string
    {
        $content = '';

        if ($this->isRegisterPage()) {
            $content .= 'Back to login';
        } else {
            $content .= 'Register a new user';
        }

        return $content;
    }

    private function getComposedHrefAndContent(string $href, string $content): string
    {
        return '<a href="' . $href . '">' . $content . '</a>';
    }

    // TODO: Evaluate logged in status here
    private function isLoggedInHtml(): string
    {
        $isLoggedIn = false; // TODO: Remove

        if ($isLoggedIn) {
            return '<h2>Logged in</h2>';
        } else {
            return '<h2>Not logged in</h2>';
        }
    }
}
