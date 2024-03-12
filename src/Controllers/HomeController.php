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

//    public function delBuyFlowBas(): void
//    {
//
//        $this->db()->del('basket', ['id' => $this->request()->input('id')]);
//
//        header("location:/bas/basket");
//
//
//    }


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

    public function delBas(): void
    {
        $this->db()->del('basket', ['id' => $this->request()->input('id')]);

        header("location:/bas/basket");



    }

    public function basket(): void
    {
        $userId = $this->auth()->user()->id();
        $productId = $this->request()->input('id');
        if ($this->db()->first('basket', ['product_id' => $productId]) != null)
        {
            $this->session()->set('error', 'в карзине уже есть этот товар');
            header("location:/bas/description/?id=$productId");
            die();
        }

        $this->db()->insert('basket', [
                'product_id' => $productId,
                'user_id' => $userId,
        ]);

        header("location:/bas/basket");

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