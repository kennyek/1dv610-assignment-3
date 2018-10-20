<?php

namespace View;

interface IContentView
{
    public function getContent(string $feedback): string;
}
