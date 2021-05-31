<?php
class controller{
    public $_cable = 1.5 . "black cable";
    public $_lenght = 15.5 . "cm";
    public $_s_color = ["green", "red", "blue", "yellow"];
    public $_josticks = 2;
    public $_depad = 1;
    public $_handgrip= 2;
    public $_logo=1;

    public function __construct($_cable,$_lenght,$_s_color,$_joysticks,$_depad,$_handgrip,$_logo){
        $this->$_cable;
        $this->$_lenght;
        $this->$_s_color;
        $this->$_joysticks;
        $this->$_depad;
        $this->$_handgrip;
        $this->$_logo;
        
        public function displayVar() {
            echo $this->$_s_color;
        }
}




?>