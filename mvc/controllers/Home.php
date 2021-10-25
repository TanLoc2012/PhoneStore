<?php

class Home extends Controller{

    public $categoryModel, $productMode;

    public function __construct(){
        $this->categoryModel = $this->model("CategoryModel");
        $this->productModel = $this->model("ProductModel");
    }

    function SayHi() {
        $allCategory = $this->categoryModel->getCategory();
        $allProduct = $this->productModel->getAllProduct();
        $this->view("home",[
            "countCategory"=>count($allCategory),
            "countProduct"=>count($allProduct),
            "allCategory"=>$allCategory,
            "allProduct"=>$allProduct
        ]);
        
    }
}

?>