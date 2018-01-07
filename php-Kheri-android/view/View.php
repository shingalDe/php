<?php
namespace view;

use content\Context;


class View extends \DOMElement
{
private $onClickListener, $onZoomingListener, 
$width=0, $minWidth=0, $maxWidth=0,
$height=0, $minHeight=0, $maxHeight=100;
    public function __construct(Context $context)
    {
        
  
    }
    
    public function findViewById($id){
        return $this->getElementsByTagName($id);
    }
    
    /**
     * @return number
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param number $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return number
     */
    public function getMinWidth()
    {
        return $this->minWidth;
    }

    /**
     * @param number $minWidth
     */
    public function setMinWidth($minWidth)
    {
        $this->minWidth = $minWidth;
    }

    /**
     * @return number
     */
    public function getMaxWidth()
    {
        return $this->maxWidth;
    }

    /**
     * @param number $maxWidth
     */
    public function setMaxWidth($maxWidth)
    {
        $this->maxWidth = $maxWidth;
    }

    /**
     * @return number
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param number $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return number
     */
    public function getMinHeight()
    {
        return $this->minHeight;
    }

    /**
     * @param number $minHeight
     */
    public function setMinHeight($minHeight)
    {
        $this->minHeight = $minHeight;
    }

    /**
     * @return number
     */
    public function getMaxHeight()
    {
        return $this->maxHeight;
    }

    /**
     * @param number $maxHeight
     */
    public function setMaxHeight($maxHeight)
    {
        $this->maxHeight = $maxHeight;
    }

    /**
     * @param mixed $onClickListener
     */
    public function setOnClickListener(OnClickListener $onClickListener)
    {
        $this->onClickListener = $onClickListener;
        $this->onClickListener->onClick($this);
        
        
    }

    /**
     * @param mixed $onZoomListener
     */
    public function setOnZoomingListener(OnZoomingListener $onZoomingListener)
    {
        $this->onZoomingListener = $onZoomingListener;
        $this->onZoomingListener->onZooming($this, 250);
        
    }
    
}