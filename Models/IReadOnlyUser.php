<?php

namespace Models;

include_once 'Models/Username.php';
include_once 'Models/Password.php';

interface IReadOnlyUser
{
    public function getUsername(): Username;
    public function getPassword(): Password;
}
