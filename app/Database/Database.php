<?php

namespace App\Database;

use App\Config\Config;

class Database implements DatabaseInterface
{

    private Config $config;
    private \PDO $pdo;

    public function __construct()
    {
        $this->connect();
    }

    public function insert()
    {
        // TODO: Implement insert() method.
    }

    private function connect(): void
    {
        $db = $this->config->db();
        try {
            $this->pdo = new \PDO("{$db['driver']}:host={$db['host']};port={$db['port']};dbname={$db['database']};", $db['username'], $db['password']);
        } catch (\PDOException $e) {
            echo "Failed connection: {$e->getMessage()}";
        }
    }
}