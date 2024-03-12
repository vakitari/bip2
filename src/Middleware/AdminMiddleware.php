<?php

namespace App\Middleware;

use App\Kernel\Middleware\AbstractMiddleware;

class AdminMiddleware extends AbstractMiddleware
{

    public function handle(): void
    {
        if ( !$this->auth->check() ){
            $this->redirect->to('/bas/login');

        } elseif ($this->auth->user()->role() != 1){
            $this->redirect->to('/bas/home');

        }
    }
}