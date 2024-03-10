<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\Validator\Validator;

class HomeController extends Controller
{

    public function index(): void
    {

            $this->view('index');

    }

    public function description(): void
    {
            $this->view('description');

    }

    public function basket(): void
    {
            $this->view('basket');

    }
    public function buyFlow(): void
    {
            $this->view('buyFlow');

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