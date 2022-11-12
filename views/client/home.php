<!DOCTYPE html>
<html lang="en">

<head>
    <title>Colo Shop</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="views/client/styles/bootstrap4/bootstrap.min.css">
    <link href="views/client/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="views/client/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="views/client/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="views/client/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="views/client/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="views/client/styles/responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header trans_300">

            <!-- Top Navigation -->

            <div class="top_nav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top_nav_left">MIỄN PHÍ GIAO HÀNG TRÊN TOÀN QUỐC KHI MUA 5 SẢN PHẨM !</div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="top_nav_right">
                                <ul class="top_nav_menu">

                                    <!-- Currency / Language / My Account -->


                                    <div class="account">


                                        <a href="New folder/login.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập</a>


                                    </div>
                                    <div class="account" >
                                        |
                                    </div>
                                    <div class="account">

                                        <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Đăng kí</a>
                                    </div>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <div class="main_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="logo_container">
                                <a href=""><img src="views/client/images/logo.png" alt="" width="170px"
                                        height="170px"></a>
                            </div>
                            <nav class="navbar">
                                <ul class="navbar_menu">
                                    <li><a href="#">Trang chủ</a></li>
                                    <li><a href="#">Danh mục</a></li>
                                    <li><a href="#">Bài viết</a></li>
                                </ul>
                                <ul class="navbar_user">
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                                    <li class="checkout">
                                        <a href="#">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <span id="checkout_items" class="checkout_items">0</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="hamburger_container">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </header>


        <!-- Slider -->

        <div class="main_slider" style="background-image:url(views/client/images/slider_1.jpeg)">
            <div class="container fill_height">
                <div class="row align-items-center fill_height">
                    <div class="col">
                        <div class="main_slider_content">
                            <h6>XUÂN / BỘ SƯU TẬP MÙA HÈ 2022</h6>
                            <h1>Giảm giá tới 30% cho hàng mới về</h1>
                            <div class="red_button shop_now_button"><a href="#">Mua ngay</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Banner -->

        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="banner_item align-items-center"
                            style="background-image:url(views/client/images/banner1.jpg)">
                            <div class="banner_category">
                                <a href="categories.html">Manga</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="banner_item align-items-center"
                            style="background-image:url(views/client/images/banner2.jpg)">
                            <div class="banner_category">
                                <a href="categories.html">kỹ năng sống</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="banner_item align-items-center"
                            style="background-image:url(views/client/images/banner3.jpg)">
                            <div class="banner_category">
                                <a href="categories.html">tiểu thuyết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- New Arrivals -->

        <div class="new_arrivals">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section_title new_arrivals_title">
                            <h2>DANH MỤC</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col text-center">
                        <div class="new_arrivals_sorting">
                            <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked"
                                    data-filter="*">Tất Cả</li>
                                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                                    data-filter=".women">Manga</li>
                                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                                    data-filter=".accessories">Kỹ năng sống</li>
                                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                                    data-filter=".men">Tiểu thuyết</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="product-grid"
                            data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

                            <!-- Product 1 -->

                            <?php foreach($data['products'] as $product ): ?>

                            <div class="product-item men">
                                <div class="product discount product_filter">
                                    <div class="product_image">
                                        <img src="views/client/image/<?=$product['hinh_anh'] ?>" alt="">
                                    </div>
                                    <div class="favorite favorite_left"></div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a href="single.html"><?=$product['ten_san_pham']?></a>
                                        </h6>
                                        <div class="product_price"><?=$product['don_gia']?>.000đ
                                            <?php $giam_gia = $product['don_gia'] * (100+10)/100 ?>
                                            <span><?=$giam_gia?>.000 đ</span></div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button"><a href="#">Chi tiết sản phẩm</a></div>
                            </div>
                            <?php endforeach; ?>



                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Blogs -->

        <div class="blogs">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section_title">
                            <h2>Bài viết</h2>
                        </div>
                    </div>
                </div>
                <div class="row blogs_container">
                    <div class="col-lg-4 blog_item_col">
                        <div class="blog_item">
                            <div class="blog_background" style="background-image:url(views/client/images/post1.jpg)">
                            </div>
                            <div
                                class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                                <h4 class="blog_title">Câu nói hay về sách & những trích dẫn về sách ý nghĩa</h4>
                                <a class="blog_more" href="#">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 blog_item_col">
                        <div class="blog_item">
                            <div class="blog_background" style="background-image:url(views/client/images/post2.jpg)">
                            </div>
                            <div
                                class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                                <h4 class="blog_title">Những câu nói hay về sách bằng tiếng Anh</h4>
                                <a class="blog_more" href="#">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 blog_item_col">
                        <div class="blog_item">
                            <div class="blog_background" style="background-image:url(views/client/images/post3.jpg)">
                            </div>
                            <div
                                class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                                <h4 class="blog_title">Danh ngôn hay về tầm quan trọng của việc đọc sách</h4>
                                <a class="blog_more" href="#">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div
                            class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
                            <ul class="footer_nav">
                                <li><a href="#">Bài viết</a></li>
                                <li><a href="#">Câu hỏi thường gặp</a></li>
                                <li><a href="contact.html">Liên hệ với chúng tôi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_nav_container">
                            <div class="cr">Copyright © 2022. All rights reserved</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src="views/client/js/jquery-3.2.1.min.js"></script>
    <script src="views/client/styles/bootstrap4/popper.js"></script>
    <script src="views/client/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="views/client/plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="views/client/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="views/client/plugins/easing/easing.js"></script>
    <script src="views/client/js/custom.js"></script>
</body>

</html>