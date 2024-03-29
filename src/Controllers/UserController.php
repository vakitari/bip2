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

    public function admin():void
    {
        $this->view('admin');

    }

    public function deleteProd():void
    {
        $prodId = $this->request()->input('id');
        $this->db()->del('product',['id' => $prodId]);

        header('location:/bas/admin');
    }

    public function delUser():void
    {
        $userId = $this->request()->input('id');
        $this->db()->del('product',['user_id' => $userId]);
        $this->db()->del('delivery',['user_id' => $userId]);
        $this->db()->del('basket',['user_id' => $userId]);
        if ($this->auth()->user()->id() == $userId){
            $this->db()->del('user',['id' => $userId]);
            $this->auth()->logout();
            header('location:/bas/login');
            die();
        }
        $this->db()->del('user',['id' => $userId]);

        header('location:/bas/admin');
    }
    
    public function deleteDel():void
    {
        $this->db()->del('delivery', ['id' => $this->request()->input('id')]);

        header('location:/bas/delivery');

    }

    public function profile():void
    {
        $this->view('profile');

    }
    public function  logout():void
    {
        $this->auth()->logout();
        header('location:/bas/login');
    }
   public function delivery():void
    {
        $this->view('delivery');
       
    }

    public function deliveryBuy():void
    {
            if($this->request()->input('dost') == null)
            $dost = 1;
            else
            $dost = $this->request()->input('dost');
        $this->db()->insert('delivery',[
            'user_id' => $this->request()->input('user_id'),
            'product_id' => $this->request()->input('product_id'),
            'qtyBuy' => $this->request()->input('qtyBuy'),
            'fPrice' => $this->request()->input('finP'),
            'dost' => $dost,
        ]);
        if($this->db()->get('basket', ['product_id' => $this->request()->input('product_id')]) != null){
            $this->db()->del('basket', ['product_id' => $this->request()->input('product_id')]);
        }
        header("location:/bas/delivery");
    }

    public function addFlow():void
    {
        $file = $this->request()->file('avatar');
        $filePath = $file->move('avatars');
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
            'avatar' => $filePath,
            
        ]);
       header('location:/bas/profile');
    }

    
    
}