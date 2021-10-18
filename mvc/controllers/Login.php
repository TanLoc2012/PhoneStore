<?php

class Login extends Controller{

    public $UserModel;

    public function __construct(){
        $this->UserModel = $this->model("UserModel");
    }

    public function SayHi(){
        $this->view("login", []);
    }

    public function UserLogin() {
       
        if( isset($_POST["btnLogin"]) ) {
            // get data
            $username = $_POST["username"];
            $password = $_POST["password"];
            // $password = password_verify($password, PASSWORD_DEFAULT);
            // insert database
            $kq = $this->UserModel->XacNhanTaiKhoan($username, $password);
           
            // show home
            if($kq["check"]) {
                $this->view("home", [
                    "result"=> $kq["check"],
                    "fullname"=> $kq["fullname"]
                ]);
            }
            else {
                $this->view("login", [
                    "result"=> $kq["check"]
                ]);
            }

        }
    }

    public function UserLogout() {
        $this->view("home", []);
    }
}

?>