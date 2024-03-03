<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\Validator\Validator;
use App\Kernel\View\View;

class UserController extends Controller
{

    public function index():void
    {
        $this->view('register');

    }

    public function profile():void
    {
        $this->view('profile');

    }

   public function post():void
    {
      $validation = $this->request()->validate([
         'name' => ['required', 'min:3', 'max:25']
      ]);

      if (!$validation){
          dd("valid false" , $this->request()->errors());
      }

      dd('valid passed');
    }
    
}