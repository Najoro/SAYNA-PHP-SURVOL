<?php 

namespace Kernel;

class View{
    private string $filename;
    private $param = array();

    public function __construct($_filename , $_param=[]){
        $this->filename = $_filename;
        $this->param = $_param;
    }

    public function display(){
        // [key => value];
        //????
        foreach($this->param as $key => $value){
            $$key = $value;
        }
        //????
        include("../app/Views/".$this->filename);
    }
}

?>