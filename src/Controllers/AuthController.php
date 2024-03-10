<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\Http\Redirect;

class AuthController extends Controller 
{

    public function register() {
        $this->view('register');
    }

    public function reg(){
        $validation = $this->request()->validate([
            'username' => ["required", 'min:3', 'max:19'],
            'password' => ["required", 'min:3']
        ]);
        if(!$validation){
            foreach ($this->request()->errors() as $field => $errors) {
                $this->session()->set($field, $errors);
            }
            $this->redirect('/bas/register');
        }

        $id = $this->db()->insert('user',[
            'username' => $this->request()->input('username'),
            'password' => password_hash($this->request()->input('password'), PASSWORD_DEFAULT)
        ]);
        dd("пользователь с id $id добавлен");
    }
    public function login() {
        $this->view('login');
    }
    public function log(){
        $login = $this->request()->input('username');
        $password =  $this->request()->input('password');

        dd($this->auth()->attempt($login,$password));
    }
}