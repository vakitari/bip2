<?php

namespace App\Kernel\Auth;

class User
{
    public function __construct(
        private int    $id,
        private string $username,
        private string $password,
        private string $email,
        private string $number,
    )
    {
    }

    public function id(): int
    {
        return $this->id();
    }

    public function username(): string
    {
        return $this->username;
    }

    public function password(): string
    {
        return $this->password;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function number(): string
    {
        return $this->number;
    }
}