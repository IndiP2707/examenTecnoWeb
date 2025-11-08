<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Band{
    public $t1;
    public $t2;
    //public $t3;

    function __construct(){
        $this->reset();
    }

    public function reset(){
        $this->t1='';
        $this->t2='';
        //$this->t3='';
        
    }

}
