<?php

namespace App\Kernel\View;

use App\Kernel\Auth\AuthInterface;
use App\Kernel\DataBase\DataBase;
use App\Kernel\DataBase\DataBaseInterface;
use App\Kernel\Exceptions\ViewNotFoundException;
use App\Kernel\Session\SessionInterface;
use App\Kernel\Storage\StorageInterface;

class View implements ViewInterface
{

    public function __construct(
        private SessionInterface $session,
        private AuthInterface $auth,
        private DataBaseInterface $db,
        private StorageInterface $storage
    )
    {

    }

    public function page(string $name,$data = []): void
    {


        $viewPath = APP_PATH."/views/pages/$name.php";
        if (!file_exists($viewPath)) {
            throw new ViewNotFoundException("страница $name не найдена");
        }
        extract(array_merge($this->defaultData(), $data));
         include_once  $viewPath;

    }

    public function component(string $name): void
    {
        $componentPath = APP_PATH."/views/components/$name.php";
        if (!file_exists($componentPath)){
            echo "Компонент $name не найден";
            return;
        }
        extract($this->defaultData());
        include_once $componentPath;

    }

    private function defaultData() :array{
        return [
            'view' =>$this,
            'session' => $this->session,
            'auth' => $this->auth,
            'db' => $this->db,
            'storage' => $this->storage,
        ];
    }
}