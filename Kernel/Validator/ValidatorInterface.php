<?php

namespace App\Kernel\Validator;

interface ValidatorInterface
{
    public function validate(array $data, array $rules);
    public function errors();
}