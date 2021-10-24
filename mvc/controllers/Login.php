<?php
require_once "mvc/utility/utility.php";

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
            $email = getPost('email');
            $password = getPost('password');
            $password = getSecurityMD5($password);
           
            // insert database
            $kq = $this->UserModel->XacNhanTaiKhoan($email, $password);
     
            // show home
            
            if($kq["result"]) {
                if($kq["role_id"] == 1) {
                    header('Location: http://localhost/Laptrinhweb/Home');
                }
                else {
                    header('Location: http://localhost/Laptrinhweb/admin');
                }
            }
            else {
                header('Location: http://localhost/Laptrinhweb/Home');
            }

        }
    }

    public function UserLogout() {
        $this->view("home", []);
    }
}

?>