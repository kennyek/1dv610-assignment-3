<?php

namespace Views;

interface IContentView
{
    public function getContent(string $feedback): string;
}
