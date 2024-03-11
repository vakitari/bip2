<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
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

   public function delivery():void
    {
        $this->view('delivery');
       
    }

    public function addFlow():void
    {
        $validation = $this->request()->validate([
            'title' => ["required", 'min:3', 'max:19'],
            'price' => ["required", 'min:3'],
            'description' => ["required", 'min:255'],
            'qty' => ["required", 'max:4']
        ]);
        if(!$validation){
            foreach($this->request()->errors() as $field => $error){
                $this->session()->set($field, $error);
            }
        }
        $this->db()->insert('product',[
            'title' => $this->request()->input('title'),
            'price' => $this->request()->input('price'),
            'description' => $this->request()->input('description'),
            'user_id' => $this->request()->input('user_id'),
            'qty' => $this->request()->input('qty'),
            
        ]);
       header('location:/bas/profile');
    }

    
    
}