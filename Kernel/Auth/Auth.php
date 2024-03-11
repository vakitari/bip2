<?php

namespace App\Kernel\Auth;

use App\Kernel\Config\ConfigInterface;
use App\Kernel\DataBase\DataBaseInterface;
use App\Kernel\Session\SessionInterface;

class Auth implements AuthInterface
{

    public function __construct(
        private DataBaseInterface $db,
        private SessionInterface $session,
        private ConfigInterface $config
    )
    {
    }

    public function attempt(string $username, string $password): bool
    {

        $user = $this->db->first('user',[
           $this->username() => $username,
        ]);
        if (!$user){

            return false;
        }

        if (!password_verify($password, $user[$this->password()])){
            return false;
        }

        $this->session->set($this->sessionField(), $user);
        return true;


    }

    public function logout($username, $password): void
    {
        // TODO: Implement logout() method.
    }

    public function check($username, $password): bool
    {
        // TODO: Implement check() method.
    }

    public function user($username, $password): ?array
    {
        // TODO: Implement user() method.
    }

    public function username(): string
    {
        return $this->config->get('auth.username', 'user');

    }

    public function password(): string
    {
        return $this->config->get('auth.password', 'pass');
    }

    public function table(): string
    {
        return $this->config->get('auth.table', 'table');
    }

    public function sessionField(): string
    {
        return $this->config->get('auth.session_field', 'user');

    }
}