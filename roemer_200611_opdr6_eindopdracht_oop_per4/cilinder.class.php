<?php
class cilinder{
    $_h= 10;
    $_r= 3;
    public function __construct($_h, $_r){
        $this->_h=$_h;
        $this->_r=$_r;
    }
    public function getCilinder(){
        return $this->$_h;
        return $this-> $_r;
    }
    public function berekenOppervlakte(){
        $_h*$_r;
    }
}


?>