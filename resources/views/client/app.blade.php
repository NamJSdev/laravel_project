<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NamJS Computer</title>
    <link rel="icon" type="image/png" href="{{asset('client/images/icon/iconweb.png')}}"/>
    <link rel="stylesheet" href="{{asset('client/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{asset('client/css/common.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/home.css')}}">
</head>
<body>  
    <div class="main">
        <i class="back-to-top fas fa-angle-up"></i>
        <a href="https://zalo.me/84392559639" target="_blank" id="btnZaloChat" class="btn-zalo-chat"><img class="cpslazy loaded" data-src="https://cellphones.com.vn/media/icons/icon-zalo.png" data-ll-status="loaded" src="https://cellphones.com.vn/media/icons/icon-zalo.png"></a>
        <div class="header">
            <!-- Header option -->
            <div class="header__option">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-sm-6 col-lg-6 col-12 text-uppercase font-weight-bold text-white slogan">Uy tín tạo nên chất lượng</div>
                        <div class="col-xl-6 col-sm-6 col-lg-6 col-12">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" title="Lựa chọn ngôn ngữ">
                                    Ngôn Ngữ
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item text-primary font-weight-bold" href="#">
                                        <img width="30px" class="img-fluid" src="images/icon/vietnam.png" alt="vietnam">
                                        Tiếng Việt
                                    </a>
                                    <a class="dropdown-item font-weight-bold" href="#">
                                        <img width="30px" class="img-fluid" src="images/icon/anhquocky.png" alt="Anh">
                                        English
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" title="Lựa chọn loại tiền tệ">
                                    Tiền Tệ
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item text-primary font-weight-bold" href="#">
                                        <img width="50px" class="img-fluid" src="images/icon/500k.jpg" alt="500k">
                                        VNĐ
                                    </a>
                                    <a class="dropdown-item font-weight-bold" href="#">
                                        <img width="50px" class="img-fluid" src="images/icon/dola.png" alt="">
                                        Dola $
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header nav -->
            <div class="header__nav">
                <div height="100%" class="container">
                    <div height="100%" class="row">
                        <div class="header__logo col-xl-3 col-sm-3 col-lg-3">
                            <a href="index.html">
                                <img class="img-fluid logo-img" src="images/thuonghieu/logonamjscomputer.png" alt="logo">
                            </a>
                        </div>
                        <div class="col-xl-6 flex-align-center nav__menu-phone">
                            <ul class="header__menu dropdown">
                                <li><a class="" href="index.html">Trang chủ</a></li>
                                <li class="dropbtn"><a href="pages/shop.html">Cửa hàng <i class="fas fa-angle-down"></i></a>
                                    <div class="dropdown-content">
                                        <a href="pages/shop.html">Ghé thăm Shop</a>
                                        <a href="pages/cart.html">Giỏ hàng</a>
                                        <a href="pages/shop.html">Sản phẩm mới</a>
                                    </div>
                                </li>
                                <li class="dropbtn"><a href="pages/about.html">Thông tin <i class="fas fa-angle-down"></i></a>
                                    <div class="dropdown-content">
                                        <a href="pages/q&a.html">Giải đáp thắc mắc</a>
                                        <a href="pages/q&a.html">Thông tin bảo hành</a>
                                        <a href="pages/about.html">Thông tin từ hãng</a>
                                        <a href="pages/about.html">Thông khuyến mại</a>
                                    </div>
                                </li>
                                <li class="dropbtn"><a href="pages/blog.html">Blog <i class="fas fa-angle-down"></i></a>
                                    <div class="dropdown-content">
                                        <a href="pages/blog.html">Tin tức công nghệ mới</a>
                                        <a href="pages/q&a.html">Kiến thức về sản phẩm</a>
                                        <a href="pages/blogdetail.html">Chia sẻ của người dùng</a>
                                    </div>
                                </li>
                                <li class="dropbtn"><a href="https://www.facebook.com/profile.php?id=100017603470791" target="_blank">Pages <i class="fas fa-angle-down"></i></a>
                                    <div class="dropdown-content">
                                        <a href="https://www.facebook.com/profile.php?id=100017603470791" target="_blank">Truy cập fanpage cửa hàng</a>
                                        <a href="https://www.facebook.com/profile.php?id=100017603470791" target="_blank">Nhắn tin cho chúng tôi</a>
                                        <a href="https://www.facebook.com/profile.php?id=100017603470791" target="_blank">Liên hệ quảng cáo</a>
                                    </div>
                                </li>
                                <li><a href="https://www.facebook.com/profile.php?id=100017603470791" target="_blank">Liên hệ</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-3 header__nav__user flex-align-center">
                            <span class="search-phone"><a href="#"><i class="fas fa-search"></i></i></a></span>
                            <span><a href="#"><i class="far fa-user hover-blue" title="User"></i></a></span>
                            <span>
                                <a href="#"><i class="far fa-heart hover-red" title=" Sản phẩm yêu thích"></i></a>
                                <div class="barge-cir">3</div>
                            </span>
                            <span>
                                <a href="pages/cart.html"><i class="fas fa-shopping-cart hover-blue" title="Giỏ hàng"></i></a>
                                <div class="barge-cir">3</div>
                            </span>
                            <span class="menu__phone"><i class="fas fa-bars"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header category -->
            <div class="header__category">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle btn-nav-category text-white font-weight-bold" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-stream text-white"></i>
                                    Danh Mục
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <ul class="nav-category-extend dropdown">
                                        <li class="dropdown-item dropbtn"><a href="html/shop.html"><i class="fas fa-laptop"></i> Laptop <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-content dropdown">
                                                <li class="dropbtn"><a href="pages/shop.html">MacBook <i class="fas fa-angle-right"></i></a>
                                                    <ul class="dropdown-content">
                                                        <li><a href="pages/shopdetail.html">MacBook Air</a></li>
                                                        <li><a href="pages/shop.html">MacBook Pro</a></li>
                                                        <li><a href="pages/shop.html">iMac</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="pages/shop.html">Dell</a></li>
                                                <li><a href="pages/shop.html">Lenovo</a></li>
                                                <li><a href="pages/shop.html">HP</a></li>
                                                <li><a href="pages/shop.html">Asus</a></li>
                                                <li><a href="pages/shop.html">Acer</a></li>
                                                <li><a href="pages/shop.html">LG</a></li>
                                                <li><a href="pages/shop.html">Msi</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-item dropbtn"><a href="pages/shop.html"><i class="fas fa-desktop"></i> Màn Hình <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-content">
                                                <li><a href="pages/shop.html">Màn hình gaming</a></li>
                                                <li><a href="pages/shop.html">Màn hình đồ họa</a></li>
                                                <li><a href="pages/shop.html">Linh kiện laptop</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-item dropbtn"><a href="pages/shop.html"><i class="fab fa-usb"></i> Phụ Kiện <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-content">
                                                <li><a href="pages/shop.html">Tai nghe</a></li>
                                                <li><a href="pages/shop.html">Chuột</a></li>
                                                <li><a href="pages/shop.html">Bàn phím</a></li>
                                                <li><a href="pages/shop.html">Phụ kiện decor</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-item"><a href="pages/q&a.html"><i class="fas fa-undo-alt"></i> Thu Cũ</a></li>
                                        <li class="dropdown-item"><a href="pages/about.html"><i class="fas fa-volume-up"></i> Khuyến Mại</a></li>
                                    </ul>
                                </div>
                              </div>
                        </div>
                        <div class="col-xl-7 col-lg-12 col-sm-12 col-12 category-search box-input">
                            <input class="border" type="text" placeholder="Tìm kiếm sản phẩm...">
                            <span class="bottom"></span>
                            <span class="right"></span>
                            <span class="top"></span>
                            <span class="left"></span>
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="col-xl-2 col-lg-12 col-sm-12 col-12 "><a href="callto:0392559639">Hotline: 0392559639</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content -->
        <div class="owl-carousel owl-theme slider__first" data-aos="fade-up" data-aos-duration="1000">
            <div class=" slide">
                <img src="images/banner/banner2.png" alt="">
                <a class="btn btn-primary btn-lg" href="pages/shop.html" role="button">Đi đến cửa hàng</a>
            </div>
            <div class=" slide">
                <img src="images/banner/banner1.png" alt="">
                <a class="btn btn-primary btn-lg" href="pages/shop.html" role="button">Đi đến cửa hàng</a>
            </div>
            <div class="slide">
                <img src="images/banner/banner3.png" alt="">
                <a class="btn btn-primary btn-lg" href="pages/shop.html" role="button">Đi đến cửa hàng</a>
            </div>
            <div class="slide">
                <img src="images/banner/banner4.png" alt="">
                <a class="btn btn-primary btn-lg" href="pages/shop.html" role="button">Đi đến cửa hàng</a>
            </div>
            <div class="slide">
                <img src="images/banner/banner5.png" alt="">
                <a class="btn btn-primary btn-lg" href="pages/shop.html" role="button">Đi đến cửa hàng</a>
            </div>
            <div class="slide">
                <img src="images/banner/banner6.png" alt="">
                <a class="btn btn-primary btn-lg" href="pages/shop.html" role="button">Đi đến cửa hàng</a>
            </div>
            <div class="slide">
                <img src="images/banner/banner7.png" alt="">
                <a class="btn btn-primary btn-lg" href="pages/shop.html" role="button">Đi đến cửa hàng</a>
            </div>
            <div class="slide">
                <img src="images/banner/banner9.png" alt="">
                <a class="btn btn-primary btn-lg" href="pages/shop.html" role="button">Đi đến cửa hàng</a>
            </div>
            <div class="slide">
                <img src="images/banner/banner10.png" alt="">
                <a class="btn btn-primary btn-lg" href="pages/shop.html" role="button">Đi đến cửa hàng</a>
            </div>
            <div class="slide">
                <img src="images/banner/banner11.png" alt="">
                <a class="btn btn-primary btn-lg" href="pages/shop.html" role="button">Đi đến cửa hàng</a>
            </div>
            <div class="slide">
                <img src="images/banner/banner12.png" alt="">
                <a class="btn btn-primary btn-lg" href="pages/shop.html" role="button">Đi đến cửa hàng</a>
            </div>
        </div>
        <div class="row item-banner">
            <div class="col-xl-6 col-lg-6 col-sm-6 c0l-12 img-hover pl-0" data-aos="fade-right" data-aos-duration="1000">
                <img width="100%" class="img-fluid box-shadow-1" src="images/banner/banner13.png">
                <button class="btn btn-1"><a class="text-decoration-none text-white" href="pages/shopdetail.html">Mua Ngay</a></button>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-6 c0l-12 img-hover pr-0" data-aos="fade-left" data-aos-duration="1000">
                <img width="100%" class="img-fluid box-shadow-1" src="images/banner/banner8.png" alt="">
                <button class="btn btn-1"><a class="text-decoration-none text-white" href="pages/shopdetail.html">Mua Ngay</a></button>
            </div>
        </div>
        <div class="content__category pt-5 pb-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="pro-header">
                    <div class="title d-flex justify-content-between">
                        <h3><a href="#">Danh mục nổi bật</a></h3>
                        <button class="btn btn-2"><a class="text-decoration-none" href="pages/shop.html">Xem chi tiết <i class="fas fa-angle-right"></i></a></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-sm-6 col-12">
                        <div class="row border p-2 h-100 box-shadow-1">
                            <div class="col-xl-6 col-sm-6 col-lg-6 col-6 d-flex flex-column justify-content-center align-items-start">
                                <p class="card-title font-weight-bold text-info"><a class="text-decoration-none" href="pages/shop.html">Laptop mới ra mắt</a></p>
                                <p class="card-content">15 sản phẩm</p>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-lg-6 col-6 d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="images/Mac/mac2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-6 col-12">
                        <div class="row border p-2 h-100 box-shadow-1">
                            <div class="col-xl-6 col-sm-6 col-lg-6 col-6 d-flex flex-column justify-content-center align-items-start">
                                <p class="card-title font-weight-bold text-info"><a class="text-decoration-none" href="pages/shop.html">Màn hình hot trong tháng</a></p>
                                <p class="card-content">10 sản phẩm</p>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-lg-6 col-6 d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="images/samsung/samsung1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-6 col-12">
                        <div class="row border p-2 h-100 box-shadow-1">
                            <div class="col-xl-6 col-sm-6 col-lg-6 col-6 h-100 d-flex flex-column justify-content-center align-items-start">
                                <p class="card-title font-weight-bold text-info"><a class="text-decoration-none" href="pages/shop.html">Tai nghe siêu bass</a></p>
                                <p class="card-content">20 sản phẩm</p>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-lg-6 col-6 h-100 d-flex justify-content-center align-items-center">
                                <img class="img-fluid h-75" src="images/phụ kiện/nghe1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-6 col-12">
                        <div class="row border p-2 h-100 box-shadow-1">
                            <div class="col-xl-6 col-sm-6 col-lg-6 col-6 h-100 d-flex flex-column justify-content-center align-items-start">
                                <p class="card-title font-weight-bold text-info"><a class="text-decoration-none" href="pages/shop.html">Chuột không dây gaming</a></p>
                                <p class="card-content">5 sản phẩm</p>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-lg-6 col-6 h-100 d-flex justify-content-center align-items-center">
                                <img class="img-fluid h-50" src="images/phụ kiện/chuot1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-6 col-12">
                        <div class="row border p-2 h-100 box-shadow-1">
                            <div class="col-xl-6 col-sm-6 col-lg-6 col-6 d-flex flex-column justify-content-center align-items-start">
                                <p class="card-title font-weight-bold text-info"><a class="text-decoration-none" href="pages/shop.html">Bàn phím cơ không dây</a></p>
                                <p class="card-content">25 sản phẩm</p>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-lg-6 col-6 d-flex justify-content-center align-items-center">
                                <img class="img-fluid" src="images/phụ kiện/co1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-6 col-12">
                        <div class="row border p-2 h-100 box-shadow-1">
                            <div class="col-xl-6 col-sm-6 col-lg-6 col-6 d-flex flex-column justify-content-center align-items-start">
                                <p class="card-title font-weight-bold text-info"><a class="text-decoration-none" href="pages/shop.html">Phụ kiện decor, trang trí</a></p>
                                <p class="card-content">50 sản phẩm</p>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-lg-6 col-6 d-flex justify-content-center align-items-center">
                                <img class="img-fluid h-75" src="images/phụ kiện/decor1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content__topProduct pt-5 pb-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="pro-header">
                    <div class="title d-flex justify-content-between">
                        <h3><a href="#">Sản phẩm bán chạy</a></h3>
                        <ul class="nav nav-tabs border-0" id="example-tabs" role="tablist">
                            <li class="nav-item">
                                <a id="tab1" class="nav-link" data-toggle="tab" role="tab"  href="#pane-tab-1">Laptop</a>
                            </li>
                            <li class="nav-item">
                                <a id="tab2" class="nav-link" data-toggle="tab" role="tab"  href="#pane-tab-2">Màn hình</a>
                            </li>
                            <li class="nav-item">
                                <a id="tab3" class="nav-link" data-toggle="tab" role="tab"  href="#pane-tab-3">Phụ kiện</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="row row-gap tab-pane fade show active " id="pane-tab-1" role="tabpanel" aria-labelledby="tab1">
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/Mac/p1.webp" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Apple MacBook Air M1 256GB 2020 I Chính hãng Apple Việt Nam </a></h5>
                                    <div class="item-product__info">
                                        <p class="btn btn-3">13.3 inches</p>
                                        <p class="btn btn-3">8GB</p>
                                        <p class="btn btn-3">SSD: 256GB</p>
                                        <p class="btn btn-3">Apple M1</p>
                                    </div>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">24.500.000&nbsp;₫</p>
                                        <p class="old-price">28.990.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Thu cũ lên đời - Trợ giá 500.000đ</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;25 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 15%</span></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/MSI/gf65.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Laptop MSI Gaming GF63 10SC 804VN</a></h5>
                                    <div class="item-product__info">
                                        <p class="btn btn-3">15.6 inches</p>
                                        <p class="btn btn-3">16GB</p>
                                        <p class="btn btn-3">SSD: 512GB</p>
                                        <p class="btn btn-3">Intel Core i5</p>
                                    </div>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">25.490.000&nbsp;₫</p>
                                        <p class="old-price">29.490.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Thu cũ lên đời - Trợ giá 500.000đ</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;36 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 13%</span></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/Mac/pro14m1.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Macbook Pro 14 inch 2021 | Chính hãng Apple Việt Nam</a></h5>
                                    <div class="item-product__info">
                                        <p class="btn btn-3">14.2 inches</p>
                                        <p class="btn btn-3">16GB</p>
                                        <p class="btn btn-3">SSD: 512GB</p>
                                        <p class="btn btn-3">Apple M1</p>
                                    </div>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">52.990.000&nbsp;₫</p>
                                        <p class="old-price">60.990.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Thu cũ lên đời - Trợ giá 500.000đ</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;13 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 13%</span></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/Asus/rogstrix.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Laptop Asus Gaming Rog Strix G15 G513IH HN015W</a></h5>
                                    <div class="item-product__info">
                                        <p class="btn btn-3">15.6 inches</p>
                                        <p class="btn btn-3">8GB</p>
                                        <p class="btn btn-3">SSD: 512GB</p>
                                        <p class="btn btn-3">AMD Ryzen 7</p>
                                    </div>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">21.490.000&nbsp;₫</p>
                                        <p class="old-price">23.990.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Thu cũ lên đời - Trợ giá 500.000đ</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;30 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 10%</span></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/Lenovo/idp3.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Laptop Lenovo Ideapad 3</a></h5>
                                    <div class="item-product__info">
                                        <p class="btn btn-3">15 inches</p>
                                        <p class="btn btn-3">8GB</p>
                                        <p class="btn btn-3">SSD: 256GB</p>
                                        <p class="btn btn-3">Intel Core I3</p>
                                    </div>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">10.990.000&nbsp;₫</p>
                                        <p class="old-price">12.990.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Thu cũ lên đời - Trợ giá 500.000đ</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;51 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 15%</span></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/MSI/gf66.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Laptop MSI GP66 Leopard 11UE-643VN</a></h5>
                                    <div class="item-product__info">
                                        <p class="btn btn-3">15.6 inches</p>
                                        <p class="btn btn-3">16GB</p>
                                        <p class="btn btn-3">SSD: 1TB</p>
                                        <p class="btn btn-3">Intel Core I7</p>
                                    </div>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">40.990.000&nbsp;₫</p>
                                        <p class="old-price">44.990.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Thu cũ lên đời - Trợ giá 500.000đ</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;12 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 9%</span></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/Mac/macminim1.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Apple Mac mini M1 256GB 2020 I Chính hãng Apple Việt Nam </a></h5>
                                    <div class="item-product__info">
                                        <p class="btn btn-3">8GB</p>
                                        <p class="btn btn-3">SSD: 256GB</p>
                                        <p class="btn btn-3">Apple M1</p>
                                    </div>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">18.000.000&nbsp;₫</p>
                                        <p class="old-price">19.990.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Thu cũ lên đời - Trợ giá 500.000đ</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;25 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 10%</span></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/Dell/evo.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Laptop Intel Evo Dell Inspiron 7000</a></h5>
                                    <div class="item-product__info">
                                        <p class="btn btn-3">13.3 inches</p>
                                        <p class="btn btn-3">8GB</p>
                                        <p class="btn btn-3">SSD: 256GB</p>
                                        <p class="btn btn-3">Intel Core I3</p>
                                    </div>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">21.990.000&nbsp;₫</p>
                                        <p class="old-price">24.990.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Thu cũ lên đời - Trợ giá 500.000đ</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;18 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 12%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-gap tab-pane fade" id="pane-tab-2" role="tabpanel" aria-labelledby="tab2">
                        <div class="col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/manhinh/ss1.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Màn hình thông minh Samsung 27 inch LS27AM500NEXXV</a></h5>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">4.990.000&nbsp;₫</p>
                                        <p class="old-price">7.339.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Ưu đãi giảm 50,000 khi mua giá treo màn hình</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;84 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 32%</span></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/manhinh/xiao1.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Màn hình Xiaomi Monitor 1C 23.8 inch BHR4510gl</a></h5>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">3.490.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Ưu đãi giảm 50,000 khi mua giá treo màn hình</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;36 đánh giá
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/manhinh/lg1.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Smart Tivi di động LG Stanby Me 27inch</a></h5>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">20.490.000&nbsp;₫</p>
                                        <p class="old-price">22.990.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Ưu đãi giảm 50,000 khi mua giá treo màn hình</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;13 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 10%</span></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/manhinh/ss2.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Màn hình thông minh Samsung 32 inch LS32AM500NEXXV</a></h5>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">5.790.000&nbsp;₫</p>
                                        <p class="old-price">8.990.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Ưu đãi giảm 50,000 khi mua giá treo màn hình</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;30 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 35%</span></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/manhinh/lg2.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Màn hình LG Gaming 24 inch 24MP59G</a></h5>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">3.190.000&nbsp;₫</p>
                                        <p class="old-price">3.900.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Ưu đãi giảm 50,000 khi mua giá treo màn hình</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;51 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 18%</span></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/manhinh/ss3.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Màn hình thông minh Samsung 32 inch LS32AM700NEXXV</a></h5>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">9.790.000&nbsp;₫</p>
                                        <p class="old-price">12.190.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Ưu đãi giảm 50,000 khi mua giá treo màn hình</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;12 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 19%</span></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/manhinh/hw1.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Màn hình đồ hoạ HUAWEI MateView 28</a></h5>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">16.990.000&nbsp;₫</p>
                                        <p class="old-price">18.990.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Ưu đãi giảm 50,000 khi mua giá treo màn hình</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;25 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 10%</span></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/manhinh/dell1.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Màn hình Dell UltraSharp 23.8 inch U2422H</a></h5>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">6.890.000&nbsp;₫</p>
                                        <p class="old-price">7.990.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Ưu đãi giảm 50,000 khi mua giá treo màn hình</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;18 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 13%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-gap tab-pane fade" id="pane-tab-3" role="tabpanel" aria-labelledby="tab3">
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/phụ kiện/airpods-2_6.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Tai nghe Bluetooth Apple AirPods 2 VN/A</a></h5>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">3.250.000&nbsp;₫</p>
                                        <p class="old-price">3.990.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Nhận gói 6 tháng Apple Music miễn phí</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;51 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 18%</span></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/phụ kiện/chuot-apple-magic-mouse-2021.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Chuột Apple Magic Mouse 2021 MK2E3 | Chính hãng Apple Việt Nam</a></h5>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">1.750.000&nbsp;₫</p>
                                        <p class="old-price">2.990.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Thu cũ lên đời - Trợ giá 500.000đ</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;12 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 41%</span></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/phụ kiện/airpods-pro_5.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Tai nghe Bluetooth Apple AirPods Pro VN/A</a></h5>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">4.300.000&nbsp;₫</p>
                                        <p class="old-price">7.990.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Nhận gói 6 tháng Apple Music miễn phí</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;25 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 46%</span></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xl-3 col-lg-6 col-sm-6 col-12">
                            <div class="card item-product img-hover box-shadow-1">
                                <img class="card-img-top pl-3 pr-3" src="images/phụ kiện/giaMH.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Giá treo màn hình máy tính North Bayou NB-F80</a></h5>
                                    <div class="item-product__price d-flex">
                                        <p class="special-price">450.000&nbsp;₫</p>
                                        <p class="old-price">650.000&nbsp;₫</p>
                                    </div>
                                    <p class="card-text promotion">Trợ giá cực tốt</p>
                                    <div class="item-product__raiting">
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        <i class="fas fa-star checked"></i>
                                        &nbsp;139 đánh giá
                                    </div>
                                </div>
                                <div class="item-product__percent"><span>Giảm 30%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row item-banner__full mb-5w-100 mr-0" data-aos="fade-up" data-aos-duration="1000">
            <img class="img-fluid w-100" src="images/banner/banner-chân-trang.jpg" alt="">
            <button class="btn btn-1"><a class="text-decoration-none text-white" href="pages/shop.html">Truy cập ngay</a></button>
        </div>
        <div class="content__product-new pb-5" data-aos="fade-up" data-aos-duration="1000">
            .<div class="container">
                <div class="pro-header m-0">
                    <div class="title d-flex justify-content-between">
                        <h3><a href="#">Sản phẩm mới về </a></h3>
                        <button class="btn btn-2"><a class="text-decoration-none" href="pages/shop.html">Sản phẩm khác <i class="fas fa-angle-right"></i></a></button>
                    </div>
                </div>
                <div class="owl-carousel owl-theme slide-item" id="pane-tab-1" role="tabpanel" aria-labelledby="tab1">
                    <div class="card item-product img-hover box-shadow-1">
                        <img class="card-img-top pl-3 pr-3" src="images/Dell/evo.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Laptop Intel Evo Dell Inspiron 7000</a></h5>
                            <div class="item-product__info">
                                <p class="btn btn-3">13.3 inches</p>
                                <p class="btn btn-3">8GB</p>
                                <p class="btn btn-3">SSD: 256GB</p>
                                <p class="btn btn-3">Intel Core I3</p>
                            </div>
                            <div class="item-product__price d-flex">
                                <p class="special-price">21.990.000&nbsp;₫</p>
                                <p class="old-price">24.990.000&nbsp;₫</p>
                            </div>
                            <p class="card-text promotion">Thu cũ lên đời - Trợ giá 500.000đ</p>
                            <div class="item-product__raiting">
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                &nbsp;18 đánh giá
                            </div>
                        </div>
                        <div class="item-product__percent"><span>Giảm 12%</span></div>
                    </div>
                    <div class="card item-product img-hover box-shadow-1">
                        <img class="card-img-top pl-3 pr-3" src="images/MSI/gf66.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Laptop MSI GP66 Leopard 11UE-643VN</a></h5>
                            <div class="item-product__info">
                                <p class="btn btn-3">15.6 inches</p>
                                <p class="btn btn-3">16GB</p>
                                <p class="btn btn-3">SSD: 1TB</p>
                                <p class="btn btn-3">Intel Core I7</p>
                            </div>
                            <div class="item-product__price d-flex">
                                <p class="special-price">40.990.000&nbsp;₫</p>
                                <p class="old-price">44.990.000&nbsp;₫</p>
                            </div>
                            <p class="card-text promotion">Thu cũ lên đời - Trợ giá 500.000đ</p>
                            <div class="item-product__raiting">
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                &nbsp;12 đánh giá
                            </div>
                        </div>
                        <div class="item-product__percent"><span>Giảm 9%</span></div>
                    </div>
                    <div class="card item-product img-hover box-shadow-1">
                        <img class="card-img-top pl-3 pr-3" src="images/Mac/macminim1.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Apple Mac mini M1 256GB 2020 I Chính hãng Apple Việt Nam </a></h5>
                            <div class="item-product__info">
                                <p class="btn btn-3">8GB</p>
                                <p class="btn btn-3">SSD: 256GB</p>
                                <p class="btn btn-3">Apple M1</p>
                            </div>
                            <div class="item-product__price d-flex">
                                <p class="special-price">18.000.000&nbsp;₫</p>
                                <p class="old-price">19.990.000&nbsp;₫</p>
                            </div>
                            <p class="card-text promotion">Thu cũ lên đời - Trợ giá 500.000đ</p>
                            <div class="item-product__raiting">
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                &nbsp;25 đánh giá
                            </div>
                        </div>
                        <div class="item-product__percent"><span>Giảm 10%</span></div>
                    </div>
                    <div class="card item-product img-hover box-shadow-1">
                        <img class="card-img-top pl-3 pr-3" src="images/Lenovo/idp3.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Laptop Lenovo Ideapad 3</a></h5>
                            <div class="item-product__info">
                                <p class="btn btn-3">15 inches</p>
                                <p class="btn btn-3">8GB</p>
                                <p class="btn btn-3">SSD: 256GB</p>
                                <p class="btn btn-3">Intel Core I3</p>
                            </div>
                            <div class="item-product__price d-flex">
                                <p class="special-price">10.990.000&nbsp;₫</p>
                                <p class="old-price">12.990.000&nbsp;₫</p>
                            </div>
                            <p class="card-text promotion">Thu cũ lên đời - Trợ giá 500.000đ</p>
                            <div class="item-product__raiting">
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                &nbsp;51 đánh giá
                            </div>
                        </div>
                        <div class="item-product__percent"><span>Giảm 15%</span></div>
                    </div>
                    <div class="card item-product img-hover box-shadow-1">
                        <img class="card-img-top pl-3 pr-3" src="images/Asus/rogstrix.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Laptop Asus Gaming Rog Strix G15 G513IH HN015W</a></h5>
                            <div class="item-product__info">
                                <p class="btn btn-3">15.6 inches</p>
                                <p class="btn btn-3">8GB</p>
                                <p class="btn btn-3">SSD: 512GB</p>
                                <p class="btn btn-3">AMD Ryzen 7</p>
                            </div>
                            <div class="item-product__price d-flex">
                                <p class="special-price">21.490.000&nbsp;₫</p>
                                <p class="old-price">23.990.000&nbsp;₫</p>
                            </div>
                            <p class="card-text promotion">Thu cũ lên đời - Trợ giá 500.000đ</p>
                            <div class="item-product__raiting">
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                &nbsp;30 đánh giá
                            </div>
                        </div>
                        <div class="item-product__percent"><span>Giảm 10%</span></div>
                    </div>
                    <div class="card item-product img-hover box-shadow-1">
                        <img class="card-img-top pl-3 pr-3" src="images/Mac/pro14m1.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Macbook Pro 14 inch 2021 | Chính hãng Apple Việt Nam</a></h5>
                            <div class="item-product__info">
                                <p class="btn btn-3">14.2 inches</p>
                                <p class="btn btn-3">16GB</p>
                                <p class="btn btn-3">SSD: 512GB</p>
                                <p class="btn btn-3">Apple M1</p>
                            </div>
                            <div class="item-product__price d-flex">
                                <p class="special-price">52.990.000&nbsp;₫</p>
                                <p class="old-price">60.990.000&nbsp;₫</p>
                            </div>
                            <p class="card-text promotion">Thu cũ lên đời - Trợ giá 500.000đ</p>
                            <div class="item-product__raiting">
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                &nbsp;13 đánh giá
                            </div>
                        </div>
                        <div class="item-product__percent"><span>Giảm 13%</span></div>
                    </div>
                    <div class="card item-product img-hover box-shadow-1">
                        <img class="card-img-top pl-3 pr-3" src="images/Mac/p1.webp" alt="">
                        <div class="card-body">
                            <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Apple MacBook Air M1 256GB 2020 I Chính hãng Apple Việt Nam </a></h5>
                            <div class="item-product__info">
                                <p class="btn btn-3">13.3 inches</p>
                                <p class="btn btn-3">8GB</p>
                                <p class="btn btn-3">SSD: 256GB</p>
                                <p class="btn btn-3">Apple M1</p>
                            </div>
                            <div class="item-product__price d-flex">
                                <p class="special-price">24.500.000&nbsp;₫</p>
                                <p class="old-price">28.990.000&nbsp;₫</p>
                            </div>
                            <p class="card-text promotion">Thu cũ lên đời - Trợ giá 500.000đ</p>
                            <div class="item-product__raiting">
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                &nbsp;25 đánh giá
                            </div>
                        </div>
                        <div class="item-product__percent"><span>Giảm 15%</span></div>
                    </div>
                    <div class="card item-product img-hover box-shadow-1">
                        <img class="card-img-top pl-3 pr-3" src="images/MSI/gf65.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title item-product__name"><a href="pages/shopdetail.html">Laptop MSI Gaming GF63 10SC 804VN</a></h5>
                            <div class="item-product__info">
                                <p class="btn btn-3">15.6 inches</p>
                                <p class="btn btn-3">16GB</p>
                                <p class="btn btn-3">SSD: 512GB</p>
                                <p class="btn btn-3">Intel Core i5</p>
                            </div>
                            <div class="item-product__price d-flex">
                                <p class="special-price">25.490.000&nbsp;₫</p>
                                <p class="old-price">29.490.000&nbsp;₫</p>
                            </div>
                            <p class="card-text promotion">Thu cũ lên đời - Trợ giá 500.000đ</p>
                            <div class="item-product__raiting">
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                &nbsp;36 đánh giá
                            </div>
                        </div>
                        <div class="item-product__percent"><span>Giảm 13%</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content__clients pt-5 pb-5">
            <div class="container owl-carousel owl-theme client-slide ">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h2 class="mb-3">Phản hồi từ khách hàng</h2>
                    <div class="line mb-3"></div>
                    <p class="client__content text-center mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis recusandae labore rem maxime temporibus assumenda accusamus praesentium ipsam, cum quas eius eligendi animi possimus placeat doloremque! Facere illo qui at?</p>
                    <div class="client__author text-center">
                        <img class="img-fluid mb-3 d-inline-block" src="images/user/thanhthanh.jpg" alt="">
                        <p class="author-name font-weight-bold">Bạn Nguyễn Thị Thanh - Hải Dương</p>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h2 class="mb-3">Phản hồi từ khách hàng</h2>
                    <div class="line mb-3"></div>
                    <p class="client__content text-center mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis recusandae labore rem maxime temporibus assumenda accusamus praesentium ipsam, cum quas eius eligendi animi possimus placeat doloremque! Facere illo qui at?</p>
                    <div class="client__author text-center">
                        <img class="img-fluid mb-3 d-inline-block" src="images/user/4.jpg" alt="">
                        <p class="author-name font-weight-bold">Anh Lê Trung Kiên - Hà Nội</p>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h2 class="mb-3">Phản hồi từ khách hàng</h2>
                    <div class="line mb-3"></div>
                    <p class="client__content text-center mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis recusandae labore rem maxime temporibus assumenda accusamus praesentium ipsam, cum quas eius eligendi animi possimus placeat doloremque! Facere illo qui at?</p>
                    <div class="client__author text-center">
                        <img class="img-fluid mb-3 d-inline-block" src="images/user/images (1).jpg" alt="">
                        <p class="author-name font-weight-bold">Chị Lương Như Ngọc - Hà Nội</p>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h2 class="mb-3">Phản hồi từ khách hàng</h2>
                    <div class="line mb-3"></div>
                    <p class="client__content text-center mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis recusandae labore rem maxime temporibus assumenda accusamus praesentium ipsam, cum quas eius eligendi animi possimus placeat doloremque! Facere illo qui at?</p>
                    <div class="client__author text-center">
                        <img class="img-fluid mb-3 d-inline-block" src="images/user/images.jpg" alt="">
                        <p class="author-name font-weight-bold">Chị Lê Hồng Loan - TP HCM</p>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h2 class="mb-3">Phản hồi từ khách hàng</h2>
                    <div class="line mb-3"></div>
                    <p class="client__content text-center mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis recusandae labore rem maxime temporibus assumenda accusamus praesentium ipsam, cum quas eius eligendi animi possimus placeat doloremque! Facere illo qui at?</p>
                    <div class="client__author text-center">
                        <img class="img-fluid mb-3 d-inline-block" src="images/user/Tim_goc_chup_phu_hop-17057.jpg" alt="">
                        <p class="author-name font-weight-bold">Anh Lương Kế Tài - Bắc Giang</p>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h2 class="mb-3">Phản hồi từ khách hàng</h2>
                    <div class="line mb-3"></div>
                    <p class="client__content text-center mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis recusandae labore rem maxime temporibus assumenda accusamus praesentium ipsam, cum quas eius eligendi animi possimus placeat doloremque! Facere illo qui at?</p>
                    <div class="client__author text-center">
                        <img class="img-fluid mb-3 d-inline-block" src="images/user/y9hnG9l.jpg" alt="">
                        <p class="author-name font-weight-bold">Anh Dương Ngọc Thái - Hà Nam</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content__blog pb-5 pt-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="pro-header">
                    <div class="title d-flex justify-content-between">
                        <h3><a href="#">Bài viết công nghệ</a></h3>
                        <button class="btn btn-2"><a class="text-decoration-none" href="pages/blog.html">Xem chi tiết <i class="fas fa-angle-right"></i></a></button>
                    </div>
                </div>
                <div class="row row-gap">
                    <div class="col-xl-4 col-sm-6 col-lg-6 col-12">
                        <div class="card item-product box-shadow-1 min-height-item">
                            <img class="card-img-top pl-3 pr-3 h-25 img-fluid" src="images/user/elonmusk.jpg">
                            <div class="card-body d-flex flex-column justify-content-between h-75">
                                <h5 class="card-title item-product__name"><a href="pages/blogdetail.html">Elon Musk đáp trả giám đốc cơ quan vũ trụ Nga </a></h5>
                                <p class="card-text">Ngày đăng: <strong class="color-blue2">22/02/2022</strong></p>
                                <p class="card-text">Giám đốc cơ quan vũ trụ Nga nói ngành hàng không vũ trụ sẽ lụn bại nếu Nga bị Mỹ trừng phạt. Elon Musk đáp trả chỉ bằng một tấm ảnh</p>
                                <button class="btn btn-1 w-50"><a class="text-decoration-none text-white" href="pages/blogdetail.html">Đọc bài viết</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-lg-6 col-12">
                        <div class="card item-product box-shadow-1 min-height-item">
                            <img class="card-img-top pl-3 pr-3 h-25 h-25 img-fluid" src="images/phụ kiện/magic_keyboard_2_pic3-scaled.jpg" alt="">
                            <div class="card-body d-flex flex-column justify-content-between h-75">
                                <h5 class="card-title item-product__name"><a href="pages/blogdetail.html">Sáng chế mới tiết lộ bàn phím Magic Keyboard trong tương lai sẽ tích hợp macOS</a></h5>
                                <p class="card-text">Ngày đăng: <strong class="color-blue2">18/02/2022</strong></p>
                                <p class="card-text">Với hệ điều hành được cài đặt bên trong bàn phím Magic Keyboard, người dùng sẽ có thể sử dụng macOS với bất kỳ màn hình nào</p>
                                <button class="btn btn-1 w-50"><a class="text-decoration-none text-white" href="pages/blogdetail.html">Đọc bài viết</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-lg-6 col-12">
                        <div class="card item-product box-shadow-1 min-height-item">
                            <img class="card-img-top pl-3 pr-3 h-25 img-fluid" src="images/Asus/n5.jpg" alt="">
                            <div class="card-body d-flex flex-column justify-content-between h-75">
                                <h5 class="card-title item-product__name"><a href="pages/blogdetail.html">Mức giá của Acer Nitro 5 Tiger được đánh giá là khá dễ tiếp cận với các game thủ tầm trung</a></h5>
                                <p class="card-text">Ngày đăng: <strong class="color-blue2">06/03/2022</strong></p>
                                <p class="card-text">Trên tay Acer Nitro 5 Tiger: Trang bị Intel Core i thế hệ 12, đồ họa RTX 30 series giá "êm" từ 27,99 triệu</p>
                                <button class="btn btn-1 w-50"><a class="text-decoration-none text-white" href="pages/blogdetail.html">Đọc bài viết</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content__mail pt-5 pb-5">
            <div class="container">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h2 class="mb-3 text-center text-secondary">Nhập mail để nhận những thông tin khuyến mãi mới nhất từ NamJS Computer</h2>
                    <div class="line mb-5"></div>
                    <form>
                        <div class="box-input form-group">
                            <input class="border form-control" type="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập mail của bạn..." required>
                            <span class="bottom"></span>
                            <span class="right"></span>
                            <span class="top"></span>
                            <span class="left"></span>
                            <i class="far fa-envelope"></i>
                        </div>
                        <button class="btn btn-info" type="submit">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="trademark pb-5 pt-5">
            <div class="container owl-carousel owl-theme trademark-slide">
                <div>
                    <a href="#">
                        <img src="images/thuonghieu/Acer.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="images/thuonghieu/Asus.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="images/thuonghieu/Dell.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="../images/thuonghieu/HP.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="images/thuonghieu/Lenovo.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="images/thuonghieu/LG.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="images/thuonghieu/msi.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="images/thuonghieu/Thinkpad.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer bgr-1 border-top bgr-1" data-aos="fade-up" data-aos-duration="1000">
            <div class="container footer-content">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-12">
                        <img class="img-fluid w-75 mb-3" src="images/thuonghieu/logonamjscomputer.png" alt="">
                        <div><i class="fas fa-home"></i> Hưng Đạo-Chí Linh-Hải Dương</div>
                        <div><i class="fas fa-phone-alt"></i> +84 39255 9639</div>
                        <div><i class="fas fa-envelope mb-3"></i> <a href="#"> nam.js.dev@gmail.com</a></div>
                        <i class="fab fa-twitter px-2"></i>
                        <i class="fab fa-tumblr px-2"></i>
                        <i class="fab fa-facebook-f px-2"></i>
                        <i class="fab fa-instagram px-2"></i>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <h6 class="">Thông tin chú ý</h6>
                        <ul class=" d-md-block d-lg-block">
                            <li><a href="#">Hỗ trợ</a></li>
                            <li><a href="pages/about.html">Giải đáp thắc mắc</a></li>
                            <li><a href="checkout.html">Thông tin đơn hàng</a></li>
                            <li><a href="#">Đơn vị vận chuyển</a></li>
                            <li><a href="about.html">Ưu đãi</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <h6 class="">Danh mục yêu thích</h6>
                        <ul class=" d-md-block d-lg-block">
                            <li><a href="pages/blog.html">Blogs</a></li>
                            <li><a href="pages/cart.html">Giỏ hàng</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="pages/about.html">Thông tin bảo hành</a></li>
                            <li><a href="#">Voucher giảm giá</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-5 col-12">
                        <h6 class="">Yêu cầu cửa hàng</h6>
                        <ul class=" d-md-block d-lg-block">
                            <li><a href="pages/blogdetail.html">Phản hồi sản phẩm</a></li>
                            <li><a href="#">Đánh giá sản phẩm</a></li>
                            <li><a href="#">Sửa chữa nâng cấp</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-7 col-12">
                        <h6 class="">Thời gian làm việc</h6>
                        <ul class="widget-contact-info d-md-block d-lg-block">
                            <li>Thứ 2 - Chủ nhật : 7H - 22H</li>
                            <li>Hình thức thanh toán :</li>
                            <img class="img-pay img-fluid" src="images/banner/payment.png" alt="">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__bottom border-top">
                <p class="text-center"><i class="fa fa-copyright"></i> 2021 <span>NamJS Computer. </span> Made with <i class="fa fa-heart text-danger"></i> by <span class="text-info">NamJS Dev</span></p>
            </div>
        </div>
    </div>
    <script src="{{asset('client/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('client/js/owl.carousel.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{asset('client/js/home.js')}}"></script>
</body>
</html>