<?php

namespace App\Kernel\DataBase;

use App\Kernel\Config\ConfigInterface;

class DataBase implements DataBaseInterface
{
    private \PDO $pdo;

    public function __construct(
        private ConfigInterface $config
    )
    {
        $this->connect();
    }

    public function insert(string $table, array $data): int|false
    {

        $fields = array_keys($data);

        $columns = implode(', ', $fields);
        $binds = implode(', ', array_map(fn ($field) => ":$field", $fields));

        $sql = "INSERT INTO $table ($columns) VALUES ($binds)";

        $stmt = $this->pdo->prepare($sql);
        try{
            $stmt->execute($data);
        }catch (\PDOException $exception){
            return false;
        }

        return (int) $this->pdo->lastInsertId();
    }
    public function first(string $table, array $condition = []): ?array
    {
        $where = '';
        if (count($condition) > 0){
            $where = 'WHERE '.implode(' AND ', array_map(fn ($field) => "$field = :$field", array_keys($condition)));
        }

        $sql = "SELECT * FROM $table $where LIMIT 1";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($condition);
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $result ?: null;
    }

    public function get(string $table, array $condition = []): ?array
    {
        $where = '';
        if (count($condition) > 0){
            $where = 'WHERE '.implode(' AND ', array_map(fn ($field) => "$field = :$field", array_keys($condition)));
        }

        $sql = "SELECT * FROM $table $where ";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute($condition);
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result ?: null;
    }

    public function getAll(string $table): ?array
    {
       
        $sql = "SELECT * FROM $table ";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result ?: null;
    }

    public function del(string $table, array $condition = []):void
    {

        $where = '';
        if (count($condition) > 0){
            $where = 'WHERE '.implode(' AND ', array_map(fn ($field) => "$field = :$field", array_keys($condition)));
        }
       
        $sql = "DELETE FROM $table $where";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute($condition);
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    private function connect():void{

        $driver  = $this->config->get('database.driver');
        $host  = $this->config->get('database.host');
        $port  = $this->config->get('database.port');
        $database  = $this->config->get('database.database');
        $username  = $this->config->get('database.username');
        $password  = $this->config->get('database.password');
        $charset  = $this->config->get('database.charset');
        try{
            $this->pdo = new \PDO(
                "$driver:host=$host;port=$port;dbname=$database;charset=$charset",
                "$username",
                "$password"
            );
        } catch (\PDOException $exception){
            exit($exception->getMessage());
        }
    }


}