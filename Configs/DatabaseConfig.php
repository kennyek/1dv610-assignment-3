<?php

namespace Configs;

class DatabaseConfig
{
    private $host;
    private $username;
    private $password;
    private $dbName;

    public function __construct(string $host, string $username, string $password, string $dbName)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbName = $dbName;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getDbName(): string
    {
        return $this->dbName;
    }
}
