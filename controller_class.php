<?php
class GameController{
    public $_cable = 1.5 . "black cable";
    public $_lenght = 15.5 . "cm";
    // public $_s_color = ["green", "red", "blue", "yellow"];
    public $_josticks = 2;
    public $_depad = 1;
    public $_handgrip= 2;
    public $_logo=1;
    public $_name="";
    public function __construct($_name){
        
        $this->_name=$_name;
    }

    public function displayVar() {
        // echo $this->$_s_color;
    }
}
class Button extends GameController{
    public $_nameB;
    public $_color;
    public $_shape;
    // public $_width;
    // public $_height;
    public function __construct($_nameB, $_name){
        parent::_construct($_name)
        $this->_nameB = $_nameB;

    }
}
echo "<pre>";
$xbox360 = new GameController("xbox");
var_dump($xbox360);
$playstation = new GameController("playstation");
var_dump($playstation);
?>