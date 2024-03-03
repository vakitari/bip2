<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class AuthController extends Controller 
{

    public function register() {
        $this->view('register');
    }

    public function login() {
        $this->view('login');
    }
}