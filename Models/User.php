<?php

namespace Models;

include_once 'Models/IReadOnlyUser.php';
include_once 'Models/Username.php';
include_once 'Models/Password.php';

class User implements IReadOnlyUser
{
    /** @var Username */
    private $username;

    /** @var Password */
    private $password;

    public function __construct(Username $username, Password $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername(): Username
    {
        return $this->username;
    }

    public function setUsername(Username $username)
    {
        $this->username = $username;
    }

    public function getPassword(): Password
    {
        return $this->password;
    }

    public function setPassword(Username $password)
    {
        $this->password = $password;
    }
}
