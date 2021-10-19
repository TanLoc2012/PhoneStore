<?php

class UserModel extends DB{

    public function InsertNewUser($fullname, $email, $username, $password, $phone_number, $address){
        $result = false;
        $qrUsername = "SELECT * FROM user WHERE username='".$username."'";
        $relUsername = mysqli_query($this->con, $qrUsername);
        if(mysqli_num_rows($relUsername) > 0) {
            return [
                "result"=>$result
            ];
        }
        if($fullname == '' || $email == '' || $username == '' || $password == ''|| $phone_number == ''|| $address == '') {
            return [
                "result"=>$result
            ];
        }
        $qr = "INSERT INTO user(fullname, email, phone_number, address, password, username)
            VALUES('$fullname','$email','$phone_number','$address','$password','$username')";
        if( mysqli_query($this->con, $qr) ) {
            $result = true;
        }

        return [
            "result"=>$result
        ];
    }

    public function XacNhanTaiKhoan($username, $password){
        $qr = "SELECT * FROM user WHERE username='".$username."' AND password='".$password."'  ";
        $result = mysqli_query($this->con, $qr);
        $data = array();
        while ($row = mysqli_fetch_array($result, 1)){
            $data = $row;
        }
        if(!isset($data["fullname"]))
            $data["fullname"] = '';
        $check = false;
        if( mysqli_num_rows($result) > 0 ) {
            $check = true;
        }
        return [
            "check"=>$check, 
            "fullname"=>$data["fullname"]
        ];
    }

}

?>