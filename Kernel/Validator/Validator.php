<?php

namespace App\Kernel\Validator;

class Validator implements ValidatorInterface
{
    private array $errors = [];
    private array $data;
public function validate(array $data, array $rules){
    $this->errors = [];
    $this->data = $data;

    foreach ($rules as $key => $rule){

        $rules = $rule;

        foreach ($rules as $rule){
            $rule = explode(':', $rule);

            $ruleName = $rule[0];
            $ruleValue = $rule[1] ?? null;

            $error = $this->validateRule($key, $ruleName, $ruleValue);

            if ($error){
                $this->errors[$key][]=$error;
            }
        }
    }
    return empty($this->errors);
}

public function errors(){
    return $this->errors;
}

private function  validateRule(string $key,  $ruleName, $ruleValue) : string|bool
{
    $value = $this->data[$key];

    switch ($ruleName){
        case 'required':
            if (empty($value)){
                return "failed $key is required";
            }
            break;
        case 'min':
            if (strlen($value) < $ruleValue){
                return "failed $key is min {$ruleValue}" ;
            }
            break;
        case 'max':
            if (strlen($value) > $ruleValue){
                return "failed $key is max {$ruleValue}" ;
            }
            break;
        case 'email':
            if (!filter_var($value, FILTER_VALIDATE_EMAIL)){
                return "не  правельный адрес почты in field $key" ;
            }
            break;
    }
    return false;
}


}