<?php
class GameController{
    protected $_cable = 1.5 . " " . "black cable";
    public $_length = 15.5 . " " . "cm";
    // public $_s_color = ["green", "red", "blue", "yellow"];
    public $_josticks = 2;
    public $_depad = 1;
    public $_handgrip= 2;
    protected $_logo=1;
    public $_name="";
    public function __construct($_name){
        
        $this->_name=$_name;
    }

    public function displayVar() {
        // echo $this->$_s_color;
    }
}
class Button extends GameController{
    public $_nameB="";
    public $_color;
    public $_shape;
    public $_width;
    public $_height;
    public function __construct($_nameB, $_name){
        // parent::_construct($_name) dit werkt niet
        $this->_nameB = $_nameB;
        
    }
    public function displayVar() {
        echo $this->_cable;
        echo "<br>";
        echo $this->_length;
        echo "<br>";
        echo $this->_josticks; 
        echo "<br>";
        echo $this->_depad; 
        echo "<br>";
        echo $this->_handgrip; 
        echo "<br>";
        echo $this->_logo; 
        echo "<br>";
        echo $this->_name; 
    }
}
echo "<pre>";
$xbox360 = new GameController("xbox");
var_dump($xbox360);
$playstation = new GameController("playstation");
var_dump($playstation);
$_obj = new Button("button", "gameController");
$_obj -> displayVar();
?>