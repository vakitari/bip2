<?php

namespace App\Kernel\Auth;

interface AuthInterface
{

    public function attempt(string $username,string $password): bool;
    public function logout($username,  $password): void;
    public function check($username,  $password): bool;
    public function user($username,  $password): ?array;
    public function username():string;
    public function password():string;
    public function table():string;
    public function sessionField():string;

}