<?php
namespace view;

use content\Context;

class ViewGroup extends \DOMDocument
{
    public function __construct(Context $context){
        
    }
    
    public function findViewById($id){
        return $this->getElementById($id);
    }
    
    
}

