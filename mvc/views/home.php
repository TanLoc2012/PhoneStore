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
    <link rel="stylesheet" href="http://localhost/public/font/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="../../public/css/grid.css">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/base.css">
    <link rel="stylesheet" href="../../public/css/responsive.css">
    <title>Web bán điện thoại</title>
</head>

<body>
    <div class="main">

       <?php require_once "./mvc/views/blocks/header.php" ?>

        <div style="margin-top:50px" class="content">
            <!-- bar -->
            <?php require_once "./mvc/views/blocks/slidebar.php" ?>
            <!-- banerProduct -->
            <!-- <div class="baner-product">
                <div class="grid wide">
                    <div class="row">
                        <div class="col l-4 m-4 c-12">
                            <img src="https://tokyolife.vn/media/wysiwyg/home-page-image/home-1/Thu_ng_2021-1.jpg" alt="TOKYOLIFE" class="baner-product_img">
                        </div>

                        <div class="col l-8 m-8 c-12">
                            <div class="row">
                                <div class="col l-6 m-6 c-6">
                                    <img src="https://tokyolife.vn/media/wysiwyg/home-page-image/home-1/Thu_ng_2021-2.jpg" alt="TOKYOLIFE" class="baner-product_img">
                                </div>
                                <div class="col l-6 m-6 c-6">
                                    <img src="https://tokyolife.vn/media/wysiwyg/home-page-image/home-1/Thu_ng_2021-3.jpg" alt="TOKYOLIFE" class="baner-product_img">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col l-12 m-12 c-12">
                                    <img src="https://tokyolife.vn/media/wysiwyg/home-page-image/home-1/Thu_ng_2021-4.jpg" alt="TOKYOLIFE" class="baner-product_img">
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div> -->
            <!-- product-propose -->
            <!-- <div class="product-propose">
                <div class="grid wide">
                    <div class="product-propose_title">
                        <h3 class="product-propose_title-name active">HÀNG MỚI VỀ</h3>
                        <h3 class="product-propose_title-name">BÁN CHẠY NHẤT</h3>
                        <div class="line"></div>
                    </div>
                    <div class="product-propose_new active">
                        <div class="product-propose_btn product-propose_prev"><i class="fas fa-angle-left"></i></div>
                        <div class="product-propose_btn product-propose_next"><i class="fas fa-angle-right"></i></div>
                        <div class="row row-nowrap">
                            <div class="col l-3 m-4 c-6 prpduct-propose_list">
                                <div class="product-propose_new-item">
                                    <img class="product-propose_new-item_img" src="https://tokyolife.vn/media/catalog/product/cache/52333d95353fd30dc93141d4ad672a12/_/o/_o_kho_c_1_l_p_n_h1i9jck002f_-_ghi_nh_t_-_390.000_4_.jpg" alt="TOKYOLIFE">
                                    <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                    <p class="product-propose_new-item_info">Áo khoác 1 lớp Nữ ...</p>
                                    <h4 class="product-propose_new-item_price">390.000 ₫</h4>
                                </div>
                            </div>

                            <div class="col l-3 m-4 c-6 prpduct-propose_list">
                                <div class="product-propose_new-item">
                                    <img class="product-propose_new-item_img" src="https://tokyolife.vn/media/catalog/product/cache/52333d95353fd30dc93141d4ad672a12/_/o/_o_kho_c_5_in_1_nam_m_li_n_i7jck500h-010_-_xanh_c_v_t_-_590.000_3_.jpg" alt="TOKYOLIFE">
                                    <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                    <p class="product-propose_new-item_info">Áo khoác 5in1 Nam ...</p>
                                    <h4 class="product-propose_new-item_price">590.000 ₫</h4>
                                </div>
                            </div>

                            <div class="col l-3 m-4 c-6 prpduct-propose_list">
                                <div class="product-propose_new-item">
                                    <img class="product-propose_new-item_img" src="https://tokyolife.vn/media/catalog/product/cache/52333d95353fd30dc93141d4ad672a12/_/o/_o_kho_c_5_in_1_n_m_li_n_i9jck501h_cam_590.000_.jpg" alt="TOKYOLIFE">
                                    <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                    <p class="product-propose_new-item_info">Áo khoác 5in1 nữ mũ ...</p>
                                    <h4 class="product-propose_new-item_price">590.000 ₫</h4>
                                </div>
                            </div>

                            <div class="col l-3 m-4 c-6 prpduct-propose_list">
                                <div class="product-propose_new-item">
                                    <img class="product-propose_new-item_img" src="https://tokyolife.vn/media/catalog/product/cache/52333d95353fd30dc93141d4ad672a12/_/o/_o_kho_c_5_in_1_n_d_i_tay_i969-007d_en-_390k.jpg" alt="TOKYOLIFE">
                                    <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                    <p class="product-propose_new-item_info">Áo khoác 5in1 nữ ...</p>
                                    <h4 class="product-propose_new-item_price">690.000 ₫</h4>
                                </div>
                            </div>

                            <div class="col l-3 m-4 c-6 prpduct-propose_list">
                                <div class="product-propose_new-item">
                                    <img class="product-propose_new-item_img" src="https://tokyolife.vn/media/catalog/product/cache/52333d95353fd30dc93141d4ad672a12/_/o/_o_kho_c_5_in_1_n_m_li_n_d_ng_m_i969-020f_-_xanh_d_ng_-_690k.jpg" alt="TOKYOLIFE">
                                    <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                    <p class="product-propose_new-item_info">Áo khoác 5in1 nữ ...</p>
                                    <h4 class="product-propose_new-item_price">690.000 ₫</h4>
                                </div>
                            </div>

                            <div class="col l-3 m-4 c-6 prpduct-propose_list">
                                <div class="product-propose_new-item">
                                    <img class="product-propose_new-item_img" src="https://tokyolife.vn/media/catalog/product/cache/52333d95353fd30dc93141d4ad672a12/v/m/vmd05157.jpg" alt="TOKYOLIFE">
                                    <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                    <p class="product-propose_new-item_info">Áo khoác 5in1 nam ...</p>
                                    <h4 class="product-propose_new-item_price">690.000 ₫</h4>
                                </div>
                            </div>

                            <div class="col l-3 m-4 c-6 prpduct-propose_list">
                                <div class="product-propose_new-item">
                                    <img class="product-propose_new-item_img" src="https://tokyolife.vn/media/catalog/product/cache/52333d95353fd30dc93141d4ad672a12/_/o/_o_kho_c_5in1_tr_em_m_li_n_i3jck003f_xanh_l_c_y_nh_t_350k_qu_n_joggers_b_trai_e5jog002h_ghi_290k_3__1.jpg" alt="TOKYOLIFE">
                                    <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                    <p class="product-propose_new-item_info">Áo khoác 5in1 trẻ em ...</p>
                                    <h4 class="product-propose_new-item_price">350.000 ₫</h4>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="product-propose_new">
                        <div class="product-propose_btn product-propose_prev"><i class="fas fa-angle-left"></i></div>
                        <div class="product-propose_btn product-propose_next"><i class="fas fa-angle-right"></i></div>
                        <div class="row row-nowrap">

                            <div class="col l-3 m-4 c-6 prpduct-propose_list">
                                <div class="product-propose_new-item">
                                    <img class="product-propose_new-item_img" src="https://tokyolife.vn/media/catalog/product/cache/52333d95353fd30dc93141d4ad672a12/_/o/_o_kho_c_5in1_nam_d_ng_d_i_i7jck002f_790k_1_1.jpg" alt="TOKYOLIFE">
                                    <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                    <p class="product-propose_new-item_info">Áo khoác 5in1 nữ ...</p>
                                    <h4 class="product-propose_new-item_price">790.000 ₫</h4>
                                </div>
                            </div>

                            <div class="col l-3 m-4 c-6 prpduct-propose_list">
                                <div class="product-propose_new-item">
                                    <img class="product-propose_new-item_img" src="https://tokyolife.vn/media/catalog/product/cache/52333d95353fd30dc93141d4ad672a12/_/o/_o_kho_c_5_in_1_nam_m_li_n_d_ng_ng_n_i7jck009f_-_xanh_l_c_y_nh_t_-_390k.jpg" alt="TOKYOLIFE">
                                    <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                    <p class="product-propose_new-item_info">Áo khoác 1 lớp Nam ...</p>
                                    <h4 class="product-propose_new-item_price">390.000 ₫</h4>
                                </div>
                            </div>


                            <div class="col l-3 m-4 c-6 prpduct-propose_list">
                                <div class="product-propose_new-item">
                                    <img class="product-propose_new-item_img" src="https://tokyolife.vn/media/catalog/product/cache/52333d95353fd30dc93141d4ad672a12/_/o/_o_kho_c_5_in_1_n_m_li_n_d_ng_m_i969-020f_-_xanh_d_ng_-_690k.jpg" alt="TOKYOLIFE">
                                    <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                    <p class="product-propose_new-item_info">Áo khoác 5in1 nữ ...</p>
                                    <h4 class="product-propose_new-item_price">690.000 ₫</h4>
                                </div>
                            </div>

                            <div class="col l-3 m-4 c-6 prpduct-propose_list">
                                <div class="product-propose_new-item">
                                    <img class="product-propose_new-item_img" src="https://tokyolife.vn/media/catalog/product/cache/52333d95353fd30dc93141d4ad672a12/v/m/vmd05157.jpg" alt="TOKYOLIFE">
                                    <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                    <p class="product-propose_new-item_info">Áo khoác 5in1 nam ...</p>
                                    <h4 class="product-propose_new-item_price">690.000 ₫</h4>
                                </div>
                            </div>

                            <div class="col l-3 m-4 c-6 prpduct-propose_list">
                                <div class="product-propose_new-item">
                                    <img class="product-propose_new-item_img" src="https://tokyolife.vn/media/catalog/product/cache/52333d95353fd30dc93141d4ad672a12/_/o/_o_kho_c_5in1_tr_em_m_li_n_i3jck003f_xanh_l_c_y_nh_t_350k_qu_n_joggers_b_trai_e5jog002h_ghi_290k_3__1.jpg" alt="TOKYOLIFE">
                                    <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                    <p class="product-propose_new-item_info">Áo khoác 5in1 trẻ em ...</p>
                                    <h4 class="product-propose_new-item_price">350.000 ₫</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> -->

            <!-- banerCenter -->
            <!-- <div class="baner-center">
                <div class="grid wide">
                    <img class="baner-center_img" src="https://tokyolife.vn/media/wysiwyg/home-page-image/home-1/7.jpg" alt="tokyolife">
                </div>
            </div> -->

            <!-- main-product -->
            <!-- product-comtainer1 -->
            <!-- <div class="product-container">
                <div class="grid wide">
                    <div class="product-title">
                        <h3>Điện thoại mới</h3>
                        <div class="product-change">
                            <p id="title1" class="product-change-title active">HÀNG MỚI VỀ</p>
                            <p id="title1" class="product-change-title">BÁN CHẠY NHẤT</p>
                            <div class="product-change-arrow">
                                <i class="fas fa-angle-left"></i>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="product-content">
                        <div class="row">
                            <div class="col l-2 m-2 c-12">
                                <ul class="product-content_list">
                                    <li class="product-content_item">Samsung</li>
                                    <li class="product-content_item">Apple</li>
                                    <li class="product-content_item">Xiaomi</li>
                                    <li class="product-content_item">Oppo</li>
                                </ul>
                            </div>

                            <div class="col l-10 m-10 c-12">
                                <div id="product1" class="product-content_about product-propose_new active">
                                    <div class="row">
                                        <div class="col l-3 m-4 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/p/2/p2toy506i.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Thỏ thông điệp 5K ...</p>
                                                <h4 class="product-propose_new-item_price">390.000 ₫</h4>
                                            </div>
                                        </div>

                                        <div class="col l-3 m-4 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/n/_/n_c_r_a_ch_n_si_u_s_ch_tinh_ch_t_b_c_h_tokyohome_1000g_-_66k_2_.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Nước rửa chén Siêu ...</p>
                                                <h4 class="product-propose_new-item_price">66.000 ₫</h4>
                                            </div>
                                        </div>

                                        <div class="col l-3 m-4 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/5/s/5s0a0167_1.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Tinh dầu Cam Ngọt ...</p>
                                                <h4 class="product-propose_new-item_price">80.000 ₫</h4>
                                                <div class="product-propose_new-item_saleAll">
                                                    <p class="product-propose_new-item_sale">115.000 ₫</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col l-3 m-4 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/x/a/xanh_da_tr_i_4_1.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Chăn lạnh 140x190cm ...</p>
                                                <h4 class="product-propose_new-item_price">479.000 ₫</h4>
                                                <div class="product-propose_new-item_saleAll">
                                                    <p class="product-propose_new-item_sale">690.000 ₫</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div id="product1" class="product-content_about product-propose_new">
                                    <div class="row">
                                        <div class="col l-3 m-4 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/h/_/h_p_chia_ng_n_t_l_nh_freezer_-_352_35k.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Hộp chia ngăn tủ ...</p>
                                                <h4 class="product-propose_new-item_price">29.000 ₫</h4>
                                            </div>
                                        </div>

                                        <div class="col l-3 m-4 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/g/i/gi_ng_with_inomata_600-4539_33k.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Hộp đựng đồ đa năng ...</p>
                                                <h4 class="product-propose_new-item_price">19.000 ₫</h4>
                                            </div>
                                        </div>

                                        <div class="col l-3 m-4 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/h/_/h_p_ng_a_n_ng_inomata-5401_33k.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Hộp đựng đồ đa năng ...</p>
                                                <h4 class="product-propose_new-item_price">29.000 ₫</h4>
                                            </div>
                                        </div>

                                        <div class="col l-3 m-4 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/k/h/khu_n_l_m_kem_inomata_-5050_39k.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Khuôn làm kem ...</p>
                                                <h4 class="product-propose_new-item_price">29.000 ₫</h4>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="product-content_baner">
                                    <div class="row sm-gutter">
                                        <div class="col l-6 m-6 c-0">
                                            <img class="product-content_baner-img" src="https://tokyolife.vn/media/wysiwyg/categories-image/Thudong2021-6.jpg" alt="tokyolife">
                                        </div>
                                        <div class="col l-6 m-6 c-0">
                                            <img class="product-content_baner-img" src="https://tokyolife.vn/media/wysiwyg/categories-image/Thudong2021-7.jpg" alt="tokyolife">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- product-comtainer2 -->
    
            <!-- <div class="product-container">
                <div class="grid wide">
                    <div class="product-title">
                        <h3>THỜI TRANG</h3>
                        <div class="product-change">
                            <p id="title3" class="product-change-title active">HÀNG MỚI VỀ</p>
                            <p id="title3" class="product-change-title ">BÁN CHẠY NHẤT</p>
                            <div class="product-change-arrow">
                                <i class="fas fa-angle-left"></i>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="product-content">
                        <div class="row">
                            <div class="col l-2 m-2 c-12">
                                <ul class="product-content_list">
                                    <li class="product-content_item">Thời trang nữ</li>
                                    <li class="product-content_item">Thời trang nam</li>
                                    <li class="product-content_item">Thời trang thông minh</li>
                                    <li class="product-content_item">Thời trang trẻ em</li>
                                </ul>
                            </div>

                            <div class="col l-4 m-0 c-0">
                                <img class="product-content_baner-img" src="https://tokyolife.vn/media/wysiwyg/categories-image/Thudong2021-9.jpg" alt="tokyolife">
                            </div>

                            <div class="col l-6 m-10 c-12">
                                <div id="product3" class="product-content_about product-propose_new active">
                                    <div class="row">
                                        <div class="col l-4 m-6 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/_/o/_o_kho_c_5_in_1_nam_m_li_n_i7jck500h-010_-_xanh_c_v_t_-_590.000_3_.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info">Áo khoác 5 in 1 Nam ...</p>
                                                <h4 class="product-propose_new-item_price">590.000 ₫</h4>
                                            </div>
                                        </div>

                                        <div class="col l-4 m-6 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/_/o/_o_kho_c_1_l_p_n_h1i9jck002f_-_ghi_nh_t_-_390.000_4_.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Áo khoác 1 lớp Nữ ...</p>
                                                <h4 class="product-propose_new-item_price">390.000 ₫</h4>
                                            </div>
                                        </div>

                                        <div class="col l-4 m-6 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/_/o/_o_polo_b_trai_e5pol002i_size_120_ghi_tr_ng_290000.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Áo Polo Bé trai E5POL002I</p>
                                                <h4 class="product-propose_new-item_price">290.000 ₫</h4>
                                            </div>
                                        </div>

                                        <div class="col l-4 m-6 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/1/2/12_3__1.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Áo Polo Nữ N9POL003I</p>
                                                <h4 class="product-propose_new-item_price">390.000 ₫</h4>
                                            </div>
                                        </div>

                                        <div class="col l-4 m-6 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/1/2/12_10__1.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Áo Polo Nữ N9POL004I</p>
                                                <h4 class="product-propose_new-item_price">390.000 ₫</h4>
                                            </div>
                                        </div>

                                        <div class="col l-4 m-6 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/_/o/_o_polo_b_trai_e5pol015i-006-xanh_n_c_bi_n-290k.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Áo Polo Bé trai E5POL015I</p>
                                                <h4 class="product-propose_new-item_price">290.000 ₫</h4>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div id="product3" class="product-content_about product-propose_new">
                                    <div class="row">
                                        <div class="col l-4 m-6 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/_/o/_o_t-shirt_nam_ng_n_tay_e7tsh036e-tr_ng-01-490k-qu_n_thun_nam_d_i_e7pan602e-ghi-xx-690k_5.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Quần thun nam E7PAN602E</p>
                                                <h4 class="product-propose_new-item_price">150.000 ₫</h4>
                                            </div>
                                        </div>

                                        <div class="col l-4 m-6 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/_/o/_o_t-shirt_nam_ng_n_tay_e7tsh016-tr_ng-01-340k-qu_n_short_nam_kaki_e7shp001e-_en-00-690k_1.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Quần short nam E7SHP001E</p>
                                                <h4 class="product-propose_new-item_price">250.000 ₫</h4>
                                            </div>
                                        </div>

                                        <div class="col l-4 m-6 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/_/o/_o_t-shirt_nam_ng_n_tay_e7tsh015e-cam-36-250k-qu_n_short_nam_i723-064e_-_n_u-320k.jpg_2__1.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Quần short nam I723-064E</p>
                                                <h4 class="product-propose_new-item_price">49.000 ₫</h4>
                                            </div>
                                        </div>

                                        <div class="col l-4 m-6 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/q/u/qu_n_jeans_nam_d_i_e7pan402e-890k_6.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Quần jeans nam dài ...</p>
                                                <h4 class="product-propose_new-item_price">250.000 ₫</h4>
                                            </div>
                                        </div>

                                        <div class="col l-4 m-6 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/q/u/qu_n_short_nam_e7shp400e-640k_2__6.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Quần short nam E7SHP400E</p>
                                                <h4 class="product-propose_new-item_price">150.000 ₫</h4>
                                            </div>
                                        </div>

                                        <div class="col l-4 m-6 c-6">
                                            <div class="product-propose_new-item">
                                                <img src="https://tokyolife.vn/media/catalog/product/cache/7a08107443ea0e40aee3357a52df61d8/q/u/qu_n_short_nam_e7shp607e-740k_5.jpg" alt="tokyolife" class="product-propose_new-item_img">
                                                <img src="https://tokyolife.vn/media/wysiwyg/home/I-Online.svg" alt="" class="product-propose_new-item_logo">
                                                <p class="product-propose_new-item_info"> Quần short nam E7SHP400E</p>
                                                <h4 class="product-propose_new-item_price">120.000 ₫</h4>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- infoStore -->
            <!-- <div class="info-store">
                <div class="grid wide">
                    <div class="product-title">
                        <h3>THÔNG TIN CỬA HÀNG</h3>
                    </div>

                    <div class="row">
                        <div class="col l-4 m-6 c-12">
                            <div class="info-store_about">
                                <img src="https://tokyolife.vn/media/wysiwyg/blog/tokyolife-tao-viec-lam-cho-nguoi-khuyet-tat.jpg" alt="tokyolife" class="info-store_about-img">
                                <h3 class="info-store_about-sub">TIN TỨC</h3>
                            </div>
                        </div>
                        <div class="col l-4 m-6 c-0">
                            <div class="info-store_about">
                                <img src="https://tokyolife.vn/media/wysiwyg/blog/CH.jpg" alt="tokyolife" class="info-store_about-img">
                                <h3 class="info-store_about-sub">HỆ THỐNG CỬA HÀNG</h3>
                            </div>
                        </div>
                        <div class="col l-4 m-0 c-0">
                            <div class="info-store_about">
                                <img src="https://tokyolife.vn/media/wysiwyg/blog/370x270.2.jpg" alt="tokyolife" class="info-store_about-img">
                                <h3 class="info-store_about-sub">CHỨNG NHẬN CHÍNH HẢNG</h3>
                                <p class="info-store_about-text">Giấy chứng nhận nhập khẩu chính hãng từ các thương hiệu nổi tiếng Nhật Bản...</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col l-3 m-4 c-6">
                            <div class="info-store_logo">
                                <img src="https://tokyolife.vn/media/wysiwyg/brand/Rohtologo.png" alt="" class="info-store_logo-img">

                            </div>
                        </div>

                        <div class="col l-3 m-4 c-6">
                            <div class="info-store_logo">
                                <img src="https://tokyolife.vn/media/wysiwyg/brand/EBISUlogo.png" alt="" class="info-store_logo-img">

                            </div>
                        </div>

                        <div class="col l-3 m-4 c-6">
                            <div class="info-store_logo">
                                <img src="https://tokyolife.vn/media/wysiwyg/brand/Kracie.png" alt="" class="info-store_logo-img">

                            </div>
                        </div>

                        <div class="col l-3 m-4 c-6">
                            <div class="info-store_logo">
                                <img src="https://tokyolife.vn/media/wysiwyg/brand/b4.jpg" alt="" class="info-store_logo-img">

                            </div>
                        </div>

                        <div class="col l-3 m-4 c-6">
                            <div class="info-store_logo">
                                <img src="https://tokyolife.vn/media/wysiwyg/brand/b6.jpg" alt="" class="info-store_logo-img">

                            </div>
                        </div>

                        <div class="col l-3 m-4 c-6">
                            <div class="info-store_logo">
                                <img src="https://tokyolife.vn/media/wysiwyg/brand/b7.jpg" alt="" class="info-store_logo-img">

                            </div>
                        </div>

                        <div class="col l-3 m-4 c-6">
                            <div class="info-store_logo">
                                <img src="https://tokyolife.vn/media/wysiwyg/brand/sh.jpg" alt="" class="info-store_logo-img">

                            </div>
                        </div>

                        <div class="col l-3 m-4 c-6">
                            <div class="info-store_logo">
                                <img src="https://tokyolife.vn/media/wysiwyg/brand/b9.jpg" alt="" class="info-store_logo-img">

                            </div>
                        </div>

                    </div>

                </div>
            </div> -->
        </div>

        <?php require_once "./mvc/views/blocks/footer.php" ?>

    </div>

    <!-- fixed -->
    <div class="fixed-container">
        <div class="fixed-form">
            <div class="fixed-form_header">
                <h3 class="fixed-form_header-title">Để lại cho chúng tôi một tin nhắn</h3>
                <i class="far fa-window-minimize"></i>
            </div>
            <form action="">
                <div class="fixed-form_group">
                    <label for="name">Tên Của Bạn <span>*</span></label>
                    <input id="name" placeholder="Tên của bạn" required type="text" class="fixed-form_group-item">
                </div>

                <div class="fixed-form_group">
                    <label for="phone">Số điện Thoại <span>*</span></label>
                    <input id="phone" placeholder="091 234 56 78" required type="text" class="fixed-form_group-item">
                </div>

                <div class="fixed-form_group">
                    <label for="option">Chọn bộ phận cần liên hệ <span>*</span></label>
                    <select name="" id="option" class="fixed-form_group-item">
                       <option value="">Hỗ Trợ Khách Hàng Online</option>
                   </select>
                </div>

                <div class="fixed-form_group">
                    <label for="message">Xin chào, chúng tôi có thể giúp gì cho bạn? <span>*</span></label>
                    <input id="message" placeholder="Bắt đầu trò chuyện tại đây..." required type="message" class="fixed-form_group-item fixed-form_group-message">
                </div>

                <div class="fixed-form_footer">
                    <div class="fixed-btn_group">
                        <input type="button" value="Hủy" class="fixed-btn_group-item">
                        <input type="submit" value="Gửi" class="fixed-btn_group-item active">
                    </div>
                    <a class="fixed-form_footer-link" href="">StringeeX</a>
                </div>

            </form>
        </div>
        <div class="btn btn-message"><i class="fas fa-comments"></i></div>
        <a href="#top" class="btn btn-srollFixed">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- modal -->
    <div class="modal-place">
        <div class="modal-overlay">
            <div class="modal-place_container">
                <div class="modal-place_regions">
                    <div class="modal-place_regions-content"><span>Miền Bắc</span><i class="fas fa-caret-down"></i>
                        <ul class="modal-place_regions-list">
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE KIẾN AN <br> 
                                2 12-14 Trần Nhân Tông - Kiến An - Hải Phòng <br>
                                0225 8830 213</a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE SAO ĐỎ <br>
                                    Số 112 Nguyễn Trãi - Sao Đỏ - Chí Linh - Hải Dương <br>
                                    0220 3596226</a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE HẢI PHÒNG 4<br> 
                                        Số 158 Tô Hiệu - Trại Cau - Lê Chân - TP Hải Phòng <br>
                                        02253610885 </a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE PHỐ NỐI<br>
                                         18C Phố Nối - Mỹ Hào - Hưng Yên <br>
                                         02213900692 </a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE HẠ LONG<br>
                                         4 182 Cao Thắng, TP Hạ Long, Quảng Ninh<br> 
                                         0203.3900977 </a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE HỒ TÙNG MẬU<br>
                                        28 Hồ Tùng Mậu -Mai Dịch - Cầu Giấy - TP. Hà Nội<br>
                                        0243.7918094 </a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE TỪ SƠN<br>
                                        Số 6-8 Khu Phố Minh Khai- Từ Sơn - Bắc Ninh<br>
                                        0222.3761338</a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE VIỆT TRÌ 2<br>
                                        2137 ĐẠI LỘ HÙNG VƯƠNG - TP. Việt Trì<br>
                                        0210 384 3456</a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE TÂN TRIỀU<br>
                                        24 Đường 70 -Tân Triều - Thanh Trì - TP. Hà Nội<br>
                                        0243.7809021</a>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-place_regions-content"><span>Miền Trung</span><i class="fas fa-caret-down"></i>
                        <ul class="modal-place_regions-list">
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE ĐỒNG HỚI 1 <br>
                                41 Trần Hưng Đạo - TP. Đồng Hới<br>
                                0232.3833678 <br></a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE BỈM SƠN<br>
                                254 Nguyễn Huệ - Thị Xã Bỉm Sơn<br>
                                0237.3770996<br> </a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE VINH 2<br>
                                65 Lê Hồng Phong - TP. Vinh<br>
                                0238.3588575<br> </a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE HUẾ<br>
                                28 Hùng Vương - TP. Huế<br>
                                0234.3818.399<br></a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE THANH HÓA 2<br>
                                70 Trần Phú - TP. Thanh Hóa<br>
                                0237.372.0696 <br></a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE ĐÔNG HÀ<br>
                                93 Hùng Vương - TP. Đông Hà<br>
                                0233.3899779<br></a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE ĐÔNG HÀ<br>
                                93 Hùng Vương - TP. Đông Hà<br>
                                0233.3899779<br></a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE ĐÔNG HÀ<br>
                                93 Hùng Vương - TP. Đông Hà<br>
                                0233.3899779<br></a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE QUẢNG NGÃI<br>
                                485 Quang Trung - TP. Quảng Ngãi<br>
                                0255.373.7988<br></a>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-place_regions-content"><span>Miền Nam</span><i class="fas fa-caret-down"></i>
                        <ul class="modal-place_regions-list">
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE BÌNH DƯƠNG <br>
                                604 CMT 8 - Phú Cường - TP. Thủ Dầu Một<br>
                                0274.3899929<br></a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE ÂU CƠ SÀI GÒN<br>
                                683A Âu Cơ - Tân Phú - TP. HCM<br>
                                02836360366<br></a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE KIÊN GIANG<br>
                                466 Nguyễn Trung Trực - TP. Rạch Giá - Kiên Giang<br>
                                02973891886<br> </a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE BIÊN HÒA<br>
                                1257 Phạm Văn Thuận - TP. Biên Hòa<br>
                                025 1882 8668 <br></a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE LÊ VĂN KHƯƠNG<br>
                                73 Lê Văn Khương, phường Hiệp Thành, quận 12, HCM (đối diện CH Thế giới di động)<br>
                                028 3636 0731<br> </a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE CẦN THƠ<br>
                                76B Đường 3/2 - Ninh Kiều - TP. Cần Thơ<br>
                                02923699668<br> </a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE BIÊN HÒA 2<br>
                                1278 ( Số cũ 119) Phạm Văn Thuận, Phương Tân Tiến, Tp Biên Hòa, Tỉnh Đồng Nai<br>
                                0251 3686 764<br></a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE VŨNG TÀU 2<br>
                                365-367 đường Nguyễn An Ninh - P9 - Tp Vũng Tàu<br>
                                0254 3613638<br></a>
                            </li>
                            <li class="modal-place_regions-item"><a href="">TOKYOLIFE BẠC LIÊU<br>
                                Số nhà 443 Trần Phú, Phường 7, Thành Phố Bạc Liêu, Tỉnh Bạc Liêu<br>
                                0291 390 1933<br></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../public/js/main.js"></script>
</body>

</html>