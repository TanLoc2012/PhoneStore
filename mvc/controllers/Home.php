<?php

class Home extends Controller{

    public $showProduct;

    public function __construct(){
        $this->showProduct = $this->model("showProduct");
    }

    function SayHi() {
        $this->view("home",[]);
    }
}

?>