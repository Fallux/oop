<?php
class GameController{
    public $_cable = 1.5 . "black cable";
    public $_lenght = 15.5 . "cm";
    public $_s_color = ["green", "red", "blue", "yellow"];
    public $_josticks = 2;
    public $_depad = 1;
    public $_handgrip= 2;
    public $_logo=1;
    public $_name="";

    public function __construct($_name){
        
        $this->_name=$_name;
    }

    public function displayVar() {
        echo $this->$_s_color;
    }

}

echo "<pre>";

$xbox360 = new GameController("xbox");

var_dump($xbox360);

$playstation = new GameController("playstation");
var_dump($playstation);

?>