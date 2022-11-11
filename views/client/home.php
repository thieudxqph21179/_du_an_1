<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/62f946fbdf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="views/client/grid.css">
    <link rel="stylesheet" href="views/client/style.css">
</head>
<body>
    <header class="grid wide ">
        <div class="head">
            <div class="head_img">
                <img src="img/BOOK STORE.png" alt="" width="200px" height="200">
            </div>
            <div class="head_seach">
                <form class="search" role="search">
                        <input class="" type="search" placeholder="Nhập tên sách bạn muốn tìm kiếm" aria-label="Search">
                        <button class="" type="submit">Tìm kiếm</button>
                </form>
            </div>
            <div class="head_login">
                <ul>
                    <li>
                        <i class="fa-solid fa-bell"></i><br>
                        Thông báo 
                    </li>
                    <li>
                        <i class="fa-solid fa-right-to-bracket"></i><br>
                        Tài khoản 
                    </li>
                    <li>
                        <i class="fa-solid fa-cart-shopping"></i><br>
                        Giỏ hàng 
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar">
            <p>Danh mục sản phẩm</p>
            <ul class="haha">
                <li><a href="">Sách Thiếu Nhi</a></li>
                <li><a href="">Sách Văn Học</a></li>
                <li><a href="">Sách Kỹ Năng sống</a></li>
                <li><a href="">Sách Ngoại Ngữ</a></li>
                <li><a href="">Sách Kinh Tế</a></li>
            </ul>
        </div>
    </header>

    <div class="grid wide banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/pexels-barbican-library-12855256.jpg" class="d-block w-100" alt="" width="80%"
                height="500px">
              </div>
              <div class="carousel-item">
                <img src="img/pexels-engin-akyurt-2952871.jpg" class="d-block w-100" alt="..."width="80%"
                height="500px">
              </div>
              <div class="carousel-item">
                <img src="img/pexels-laker-5792852.jpg" class="d-block w-100" alt="..."width="80%"
                height="500px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

    <div class="product grid wide">
        <h2>Sản phẩm</h2>
        <div class="row">
            <?php foreach($data['products'] as $product ): ?>
            <div class="item col l-3 m-6 c-12">
                <img src="views/client/image/<?= $product['hinh_anh'] ?>" alt="" width="600px" height="300px">
                <div class="item_info">
                    <h3><?= $product['hinh_anh'] ?></h3>
                    <p>Giá tiền: <?= $product['hinh_anh'] ?>.000 Đ</p>
                    <button>Thêm vào giỏ hàng</button>
                </div>
            </div>
           <?php endforeach; ?>
        </div>
    </div>

    <footer class="grid">
        <div class="grid wide">
            <h2>BOOK STORE - NHÀ SÁCH ONLINE</h2>
            <div class="row">
                <div class="footer_item col">
                    <H3>Thông tin</H3>
                    <p></p>
                </div>
                <div class="footer_item col">
                    <p>Điện thoại: 0969025884</p>
                    <p>Email: ttm1022013@gmail.com</p>
                    <p>Địa chỉ: Vụ Quang - Đoan Hùng - Phú Thọ</p>
                </div>
            </div>
            <hr>
            <h5>Copyright © 2022. All rights reserved.</h5>
        </div>
    </footer>
</body>
</html>