<?php

namespace App\Kernel\DataBase;

Interface DataBaseInterface
{

    public function insert(string $table, array $data) :int|false;

    public function first(string $table, array $condition = []): ?array;

}