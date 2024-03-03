<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

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

}