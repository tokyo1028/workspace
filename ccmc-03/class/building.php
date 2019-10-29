<?php
class building {
    // properties 
    private $name;
    private $height;
    //privete 
    // constructor
    function __construct($name, $height) {
        $this->name = $name;
        $this->height = $height;
    }
    //acceor method
    function getName($name) {
        $this->$name = $name;
    }
    function getName() {
        return $this->name;
    }
    function getHeight($height) {
        $this->height = $height;
    }
    function getHeight() {
        return $this->height;
    }
    function getProfile() {
        $profile = "{$this->name}の高さは{$this->height}ｍです";
        return $profile;
        
    }
}
?>