<?php

namespace View;

include_once 'View/IContentView.php';

use View\IContentView;

interface IView
{
    public function render(IContentView $contentView);
}
