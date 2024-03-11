<?php

namespace App\Kernel\Container;

use App\Kernel\Auth\Auth;
use App\Kernel\Auth\AuthInterface;
use App\Kernel\Config\Config;
use App\Kernel\Config\ConfigInterface;
use App\Kernel\DataBase\DataBase;
use App\Kernel\DataBase\DataBaseInterface;
use App\Kernel\Http\Redirect;
use App\Kernel\Http\RedirectInterface;
use App\Kernel\Http\Request;
use App\Kernel\Http\RequestInterface;
use App\Kernel\Router\Router;
use App\Kernel\Router\RouterInterface;
use App\Kernel\Session\Session;
use App\Kernel\Session\SessionInterface;
use App\Kernel\Storage\Storage;
use App\Kernel\Storage\StorageInterface;
use App\Kernel\Validator\Validator;
use App\Kernel\Validator\ValidatorInterface;
use App\Kernel\View\View;
use App\Kernel\View\ViewInterface;

class Container
{
    public readonly RequestInterface $request;
    public readonly RouterInterface $router;
    public readonly ViewInterface $view;
    public readonly ValidatorInterface $validator;
    public readonly RedirectInterface $redirect;
    public readonly SessionInterface $session;
    public readonly ConfigInterface $config;
    public readonly DataBaseInterface $db;
    public readonly AuthInterface $auth;
    public readonly StorageInterface $storage;


    public function __construct(){
        $this->registerServices();
    }

    public function registerServices(): void
    {
        $this->request = Request::createFromGlobals();
        $this->validator = new Validator();
        $this->request->setValidator($this->validator);
        $this->redirect = new Redirect();
        $this->session = new Session();
        $this->config = new Config();
        $this->storage = new Storage($this->config);
        $this->db = new DataBase($this->config);
        $this->auth = new Auth($this->db,$this->session,$this->config);
        $this->view = new View($this->session,$this->auth,$this->db);

        $this->router = new Router(
            $this->view,
            $this->request,
            $this->redirect,
            $this->session,
            $this->db,
            $this->auth,
            $this->storage
        );
    }
}