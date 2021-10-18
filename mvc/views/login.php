<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/login.css">
    <title>Login</title>
</head>

<body>

    <form id="form_login" action="../../Login/UserLogin" method="post">
        <h4>ĐĂNG NHẬP</h4>
        <div class="form-group">
            <label for="exampleInputPassword1">Username</label>
            <input type="text" class="form-control" id="username" name="username"
                placeholder="Username...">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" name="password"
                placeholder="Password...">
        </div>
        <?php 
            if(isset($data["result"])){
                if(!$data["result"])
                    echo "<h6>Username or Password incorrect!!!</h6>";
            }
               
        ?>
        <div>
            <a id="link_register" href="../../Register">Đăng ký tài khoản</a>
            <button type="submit" name="btnLogin" class="btn btn-primary">Login</button>
        </div>
    </form>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script src="../../public/js/validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>