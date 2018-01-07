<?php
namespace content;

use app\Activity;
use os\Bundle;

class Intent
{
    private $objectarray=[];
    private $i;
    public function __construct(Activity $activity, $class){
        $this->i=0;
    }
    
    public function __construct(){
        $this->i=0;
    }
    public function getArrayList(){ return $this->objectarray; }
    
    public function addBundle(Bundle $bundle){
        $this->objectarray[$i]=$bundle;
        $i++;
    }
    public function put($key, $valObject){
        $this->objectarray[$key]=$valObject;
    }
    public function getObject($key){
        return $this->objectarray;
    }
    public function finish(){}
}

