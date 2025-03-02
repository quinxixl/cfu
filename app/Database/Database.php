<?php

namespace App\Database;


class Database
{

    private static function connect(): \PDO
    {
        $db = require_once __DIR__ . "/../config/config.php";
        try {
            self::$pdo = new \PDO("{$db['driver']}:host={$db['host']};port={$db['port']};dbname={$db['database']};", $db['username'], $db['password']);
        } catch (\PDOException $e) {
            echo "Failed connection: {$e->getMessage()}";
        }
        return self::$pdo;
    }
    private static \PDO $pdo;


    public static function fetchColumns(string $table, array $columns, string $where = '', array $params = []): array {
        $columnList = implode(', ', $columns);
        $sql = "SELECT $columnList FROM $table";

        if (!empty($where)) {
            $sql .= " WHERE $where";
        }

        $stmt = self::connect()->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }
}
