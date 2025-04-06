<?php

namespace App\Database;


use PDO;

class Database
{

    private static ?\PDO $pdo = null;

    private static function connect(): \PDO
    {
        if (self::$pdo !== null) {
            return self::$pdo; // Если соединение уже есть, просто возвращаем его
        }

        $db = require __DIR__ . "/../config/config.php";

        try {
            self::$pdo = new \PDO(
                "{$db['driver']}:host={$db['host']};port={$db['port']};dbname={$db['database']};charset=utf8mb4",
                $db['username'],
                $db['password'],
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Бросает исключения при ошибках
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Упрощает работу с массивами
                    PDO::ATTR_EMULATE_PREPARES => false // Улучшает безопасность
                ]
            );
        } catch (\PDOException $e) {
//            error_log("Ошибка подключения к БД: " . $e->getMessage());
//            die("Ошибка подключения к базе данных. Попробуйте позже.");
            echo $e->getMessage();
        }

        return self::$pdo;
    }

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
