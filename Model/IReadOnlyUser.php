<?php

namespace Model;

include_once 'Model/Username.php';
include_once 'Model/Password.php';

interface IReadOnlyUser
{
    public function getUsername(): Username;
    public function getPassword(): Password;
}
