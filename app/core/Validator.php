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

    private function checkMinLength(int $length, string $data, string $field)
    {
        if(strlen($data) < $length)
        {
            $text = sprintf("%s должен быть не менее %s символов. У вас %s", $field, $length, strlen($data));
            throw new \Exception($text);
            $this->valid(false);
        }
    }
    
    private function checkMaxLength(int $length, string $data, string $field)
    {
        if(strlen($data) > $length)
        {
            $text = sprintf("%s должен быть не длинней %s символов. У вас %s", $field, $length, strlen($data));
            throw new \Exception($text);
            $this->valid(false);
        }
    }   
    private function checkIsString(int $length, string $data, string $field)
    {
        if(!is_string($data) || is_numeric($data)){   
            $text = sprintf("%s должен быть текстом", $field);
            throw new \Exception($text);
            $this->valid(false);
        }
    }
}