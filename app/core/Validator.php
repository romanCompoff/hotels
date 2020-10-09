<?php
namespace Dva\Hotels\Core;

class Validator
{
    protected $rules;
    protected $valid = true;

    public function setRules(array $rules)
    {
        $this->rules = $rules;
    }
    
    public function execut(array $tableData)
    {
        foreach($tableData as $key => $data){
            if(!$this->rules[$key]){
                continue;
            }
            foreach($this->rules[$key] as $rulesKey => $oneFiledRules){
                $method = sprintf('check%s', ucfirst($rulesKey));
                $this->$method($oneFiledRules, $data, $key);
            }
        }
        return $this->valid;
    }

    private function checkMinLength(int $length, string $data, string $fild)
    {
        if(strlen($data) < $length)
        {
            $text = sprintf("%s должен быть не менее %s символов. У вас %s", $fild, $length, strlen($data));
            throw new \Exception($text);
            $this->valid(false);
        }
    }
    
    private function checkMaxLength(int $length, string $data, string $fild)
    {
        if(strlen($data) > $length)
        {
            $text = sprintf("%s должен быть не длинней %s символов. У вас %s", $fild, $length, strlen($data));
            throw new \Exception($text);
            $this->valid(false);
        }
    }    
    private function checkNecessary(int $length, string $data, string $fild)
    {
        if(strlen($data) > $length)
        {
            $text = sprintf("%s должен быть не длинней %s символов. У вас %s", $fild, $length, strlen($data));
            throw new \Exception($text);
        }
    }
}