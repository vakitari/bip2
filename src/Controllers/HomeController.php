<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\Validator\Validator;

class HomeController extends Controller
{

    public function index(): void
    {

            $this->view('index');
            if ($this->session()->has('user')) {
            

            }

    }

    public function description(): void
    {
        $product = $this->db()->first('product', [
                'id' => $this->request()->input('id')
        ]);

            $this->view('description',[
                'product' => $product
            ]);

    }
    public function basket2(): void
    {


            $this->view('basket');

    }

    public function basket(): void
    {

        $productId = $this->request()->input('id');
        $userId = $this->auth()->user()->id(); 
        $this->db()->insert('basket', [
                'product_id' => $productId,
                'user_id' => $userId,
        ]);

            $this->view('basket');

    }
    public function buyFlow(): void
    {
            $product = $this->db()->first('product',[
                'id' =>$this->request()->input('id')
            ]);
            $this->view('buyFlow',[
                'product'=>$product
            ]);

    }
    public function about(): void
    {
            $this->view('about');

    }
        public function contact(): void
    {
            $this->view('contact');

    }
}