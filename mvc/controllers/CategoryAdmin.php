<?php
require_once "mvc/utility/utility.php";
class CategoryAdmin extends Controller{

    public $categoryModel;

    public function __construct() {
        $this->categoryModel = $this->model("CategoryModel");
    }

    public function SayHi(){
        $category = $this->categoryModel->getCategory();
        $this->view("category/categoryAdmin",[
            "category"=>$category
        ]);
    }

    public function insertCategoryController() {
        if(isset($_POST)){
            $name = getPost("name");
            $this->categoryModel->insertCategory($name);
        }
        header('Location: http://localhost/Laptrinhweb/CategoryAdmin');
    }

    public function updateCategoryController($id) {
        $name = '';
        $name = $this->categoryModel->selectCategory($id);
        $this->view("category/updateCategory",[
            "id"=>$id,
            "name"=>$name
        ]);
    }

    public function doupdateCategoryController() {
        if(isset($_POST)) {
            $id = getPost('id');
            $name = getPost('name');
            $this->categoryModel->updateCategory($name, $id);
        }
        header('Location: http://localhost/Laptrinhweb/CategoryAdmin');
    }

    public function deleteCategoryController($id) {
        $data = $this->categoryModel->selectCategoryDelete($id);
        header('Location: http://localhost/Laptrinhweb/CategoryAdmin');
    }
} 

?>