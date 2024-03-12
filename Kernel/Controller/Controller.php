<?php

namespace App\Kernel\Controller;

use App\Kernel\Auth\AuthInterface;
use App\Kernel\DataBase\DataBaseInterface;
use App\Kernel\Http\RedirectInterface;
use App\Kernel\Http\RequestInterface;
use App\Kernel\Session\SessionInterface;
use App\Kernel\Storage\StorageInterface;
use App\Kernel\View\ViewInterface;

abstract class Controller
{

    private ViewInterface $view;
    private RequestInterface $request;
    private RedirectInterface $redirect;
    private SessionInterface $session;
    private DataBaseInterface $dataBase;
    private AuthInterface $auth;
    private StorageInterface $storage;

    public function view(string $name, array $data = []): void
    {
        $this->view->page($name,$data);
    }

    public function setView(ViewInterface $view): void
    {
        $this->view = $view;
    }

    public function request(): RequestInterface
    {
        return $this->request;
    }

    public function setRequest(RequestInterface $request): void
    {
        $this->request = $request;
    }

    public function setRedirect(RedirectInterface $redirect): void
    {
        $this->redirect = $redirect;
    }
    public function redirect($url):void
    {
        $this->redirect->to($url);

    }

    public function session(): SessionInterface
    {
        return $this->session;
    }

    public function setSession(SessionInterface $session): void
    {
        $this->session = $session;
    }

    public function db(): DataBaseInterface
    {
        return $this->dataBase;
    }

    public function setDataBase(DataBaseInterface $dataBase): void
    {
        $this->dataBase = $dataBase;
    }

    public function auth(): AuthInterface
    {
        return $this->auth;
    }

    public function setAuth(AuthInterface $auth): void
    {
        $this->auth = $auth;
    }

    public function storage(): StorageInterface
    {
        return $this->storage;
    }

    public function setStorage(StorageInterface $storage): void
    {
        $this->storage = $storage;
    }
}