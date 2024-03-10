<?php

namespace App\Kernel\Session;

interface SessionInterface
{
    public function set(string $key, $value): void;
    public function getFlash(string $key, $default = null);
    public function get(string $key, $default = null);
    public function destroy();
    public function remove(string $key) : void;
    public function has(string $key) : bool;

}