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
        $file = $this->request()->file('image');
        $filePath = $file->move('avatars');
        $validation = $this->request()->validate([
            'username' => ["required", 'min:3', 'max:19'],
            'password' => ["required", 'min:3'],
            'email' => ["required", 'min:3'],
            'number' => ["required", 'min:3'],
        ]);
        if(!$validation){
            foreach ($this->request()->errors() as $field => $errors) {
                $this->session()->set($field, $errors);
            }
            $this->redirect('/bas/register');
        }

        $id = $this->db()->insert('user',[
            'username' => $this->request()->input('username'),
            'password' => password_hash($this->request()->input('password'), PASSWORD_DEFAULT),
            'email' => $this->request()->input('email'),
            'number' => $this->request()->input('number'),
            'avatar'=> $filePath,
        ]);
        header("location:/bas/login");
    }
    public function login() {
        $this->view('login');

    }
    public function log(){
        $login = $this->request()->input('username');
        $password =  $this->request()->input('password');
        if($this->auth()->attempt($login,$password))
        {
        header("location:/bas/home");
        } else{
        header("location:/bas/login");
        $this->session()->set('error', 'Пользователь не найден');
        }


    }
}