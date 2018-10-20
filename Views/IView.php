<?php

namespace Views;

include_once 'Views/IContentView.php';

use Views\IContentView;

interface IView
{
    public function render(IContentView $contentView);
}
