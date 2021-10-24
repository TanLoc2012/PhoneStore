<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="https://tokyolife.vn/media/favicon/stores/1/App_Logo_2362px-01-01.png">
    <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/font/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/grid.css">
    <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/style.css">
    <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/base.css">
    <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/responsive.css">
    <title>Web bán điện thoại</title>
</head>

<body>
<div class="header">
            <div class="grid wide">
                <div class="header-bottom">
                    <div class="header-bottom_logo">
                        <a href="http://localhost/Laptrinhweb/Home">
                            <img src="https://tokyolife.vn/media/logo/stores/1/LOGO-TKL-01.png" alt="">
                        </a>
                    </div>
                    <div class="header-bottom_search">
                        <div class="header-bottom_menu">
                            <div class="header-bottom_menu-icon">
                                <i class="fas fa-bars"></i>
                            </div>
                            <div class="header-bottom_menu-list">
                                <ul class="nav-list_responsive">
                                    <div class="nav-list_responsive-icon">
                                        <i class="fas fa-times"></i>
                                    </div>
                                    <li class="nav-itemRespponsive">TRANG CHỦ
                                    </li>
                                    <li class="nav-itemRespponsive">Điện thoại mới
                                    </li>
                                    <li class="nav-itemRespponsive"> Điện thoại cũ
                                    </li>
                                    <li class="nav-itemRespponsive">Hàng xách tay
                                    </li>
                                    <li class="nav-itemRespponsive">Tin tức
                                    </li>
                                    <li class="nav-itemRespponsive">Liên hệ
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <input class="header-bottom_search-input" type="text" placeholder="Tìm kiếm...">
                        <button class="header-bottom_search-btn"><i class="fas fa-search"></i></button>
                    </div>

                    <div class="header-bottom_cart pc">
                        <button class="header-bottom_cart-icon header-bottom_cart-icon1">
                                <div class="header-info_about-content">
                                    <a style="color:black;text-decoration: none;" href="http://localhost/Laptrinhweb/Login">
                                    <?php  
                                        if(isset($data["result"]) ) {
                                            if($data["result"])
                                                echo $data["fullname"];
                                        }
                                        else echo "Đăng nhập tài khoản"
                                    ?>       
                                        <i class="far fa-user"></i>
                                    </a> 
                                    <ul class="header-info_about-list">
                                        <li class="header-info_about-item">
                                            <a href="http://localhost/Laptrinhweb/Register">Đăng ký tài khoản</a>
                                        </li>
                                        <li class="header-info_about-item">
                                            <a href="http://localhost/Laptrinhweb/Home">Đăng xuất</a>
                                        </li>
                                        <li class="header-info_about-item">
                                            <a href="#">Đơn hàng của tôi</a>
                                        </li>
                                        <li class="header-info_about-item">
                                            <a href="#">Thanh toán</a>
                                        </li>
                                    </ul>
                                </div>
        
            
                        </button>
                    </div>

                </div>
            </div>
        </div>
</body>
</html>