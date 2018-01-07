<?php
namespace app;


use os\Bundle;
use view\Image;
use anim\Animation;
use view\View;

abstract class Activity{
    
private $title, $logo, $animation;
private $contentView=null;
    public function __construct(){
      $bundle = new Bundle();
      $bundle->put("Kheri", "Hessin");
      $this->onCreate($bundle);
       
    }
    
    #Override
    protected abstract function onCreate(Bundle $bundle);
    
    public function setContentView(View $view){
        $this->contentView=$view;
        
    }
    
    public function addContentView(View $view){
        
    }
    
    public function findViewById($id){
        return $this->contentView->findViewById($id);
    }
    /**
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return Image
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param Image $logo
     */
    public function setLogo(Image $logo)
    {
        $this->logo = $logo;
    }

    /**
     * @return Animation
     */
    public function getAnimation()
    {
        return $this->animation;
    }

    /**
     * @param Animation $animation
     */
    public function setAnimation(Animation $anim)
    {
        $this->animation = $anim;
    }

}