<?php
namespace os;

use content\Intent;

class Bundle
{
    private $array = [];
    private $intent=null;
    public function __construct()
    {}
    
    public function setIntent(Intent $intent){
        $this->intent=$intent;
    }
    public function getIntent(){
        return $this->intent;
    }
    public function put($key, $val){
        $this->array[$key]=$val;
    }
    
    public function getString($key){
        return $this->array[$key];
    }
    public function getCount(){
        return count($this->array);
    }
    public function getArrayList(){ return $this->array; } 
    public function getObject($key){
        return $this->getString($key);
    }
}

