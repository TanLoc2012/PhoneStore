<?php

class Register extends Controller{

    public $UserModel;

    public function __construct(){
        $this->UserModel = $this->model("UserModel");
    }

    public function SayHi(){
        $this->view("register", []);
    }

    public function UserRegister() {
        
        if( isset($_POST["btnRegister"]) ) {
            // get data
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            // $password = password_hash($password, PASSWORD_DEFAULT);
            $phone_number = $_POST["phone_number"];
            $address = $_POST["address"];

            // insert database
            $kq = $this->UserModel->InsertNewUser($fullname, $email, $username, $password, $phone_number, $address);
            
            // show home
            $result = true;
            $this->view("home", [
                "result"=> $result,
                "fullname"=>$fullname
            ]);
        }
    }
}

?>