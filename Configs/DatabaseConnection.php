<?php

namespace Configs;

include_once 'Configs/AppSettings.php';
include_once 'Configs/DatabaseConfig.php';
include_once 'Models/DatabaseConnectionException.php';

use mysqli;
use Configs\{AppSettings, DatabaseConfig};
use Models\DatabaseConnectionException;

class DatabaseConnection
{
    /** @var mysqli */
    private $connection;

    /** @var DatabaseConfig */
    private $dbConfig;

    /** TODO: Find good way to inject DatabaseConfig */
    public function __construct()
    {
        $appSettings = new AppSettings();
        $this->dbConfig = $appSettings->getDatabaseConfig();
    }

    public function getConnection(): mysqli
    {
        if (is_null($this->connection)) {
            return $this->createConnection();
        }

        return $this->connection;
    }

    private function createConnection(): mysqli
    {
        $connection = $this->newMysqliConnection();
        $this->throwExceptionOnConnectionError($connection);

        return $connection;
    }

    private function newMysqliConnection(): mysqli
    {
        $host = $this->dbConfig->host;
        $username = $this->dbConfig->username;
        $password = $this->dbConfig->password;
        $dbName = $this->dbConfig->dbName;

        return new mysqli($host, $username, $password, $dbName);
    }

    private function throwExceptionOnConnectionError(mysqli $connection)
    {
        if (!$connection->connect_error) {
            return;
        }

        $exceptionMessage = 'Error connecting to database.';
        throw new DatabaseConnectionException('Error connecting to database.');
    }
}
