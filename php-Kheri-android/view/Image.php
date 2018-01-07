<?php
namespace view;

/**
 * @author Kheri Nassir
 * @copyright 2018
 * @version 1.0.0
 * @category main view
 * @var string
 * @desc ImageView
 */

class Image
{

    private $imagePath=null;
    
    /**
     * @return string
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }

    /**
     * @param string $imagePath
     */
    public function setImagePath(string $imagePath)
    {
        $this->imagePath = $imagePath;
        return $this;
    }

    public function __construct()
    {}
    
}

