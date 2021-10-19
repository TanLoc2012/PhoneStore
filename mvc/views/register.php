<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/register.css">
    <title>Register</title>
</head>
<body>

<form id="form_register" action="./Register/UserRegister"  method="post">
    <h4>ĐĂNG KÝ TÀI KHOẢN</h4>
  <div class="form-group">
    <label for="exampleInputEmail1">Full name</label>
    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Fullname...">
    <div id="mes_fullname"></div>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email...">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Username...">
  </div>
<?php
  if(isset($data["result"])){
    if($data["result"] == false)
      echo "Username đã tồn tại!!!";
  }
?>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password...">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Phone number</label>
    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone number...">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Address...">
  </div>
  <div>
    <a id="link_login" href="../../Login">Tôi đã có tài khoản</a>
    <button type="submit" name="btnRegister" class="btn btn-primary">Register</button>
    <a id="link_register" href="../../Home">Trở về trang chủ</a>
  </div>
  
</form>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script src="../../public/js/validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>