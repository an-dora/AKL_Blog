<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@600&family=Martel&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/slider.css">
    <title>ALK Blog</title>
</head>

<body>
    <!-- Navbar -->
    @include('layouts.navbar')
    {{-- Layout --}}
    <div class="main-layout">
        <!-- Truyện nổi bật -->
        <div class="layout">
            {{-- @include('layouts.top') --}}
            <h2>Truyện nổi bật</h2>
            <section class="slider">
                <div id="item-slider"><a href="{{ route('ifht') }}"><img src="images/avt-truyen/HuyetThan.png"alt=""></a></div>
                <div id="item-slider"><a href="{{ route('ifdl') }}"><img src="images/avt-truyen/dldl.png" alt=""></a></div>
                <div id="item-slider"><a href="info-huyetthan.html"><img src="images/avt-truyen/chi4.jpg" alt=""></a></div>
                <div id="item-slider"><a href="info-huyetthan.html"><img src="images/avt-truyen/daikhaugiapsu.png"alt=""></a></div>
                <div id="item-slider"><a href="info-huyetthan.html"><img src="images/avt-truyen/khongnho.png"alt=""></a></div>
                <div id="item-slider"><a href="info-huyetthan.html"><img src="images/avt-truyen/nong.png" alt=""></a></div>
                <div id="item-slider"><a href="info-huyetthan.html"><img src="images/avt-truyen/ok.jpg" alt=""></a></div>
                <div id="item-slider"><a href="info-huyetthan.html"><img src="images/avt-truyen/olongvien.jpg"alt=""></a></div>
                <div id="item-slider"><a href="info-huyetthan.html"><img src="images/avt-truyen/thichdamnhauko.png"alt=""></a></div>
            </section>
        </div>
        <!-- Main -->
        <div class="layout ">
            <!-- Main -->
            <div class="filter">
                <h2>Truyện mới cập nhật </h2>
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Sắp sếp theo
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <span>Theo ngày:</span>
                        <button class="dropdown-item" type="button">Theo lượt xem</button>
                        <button class="dropdown-item" type="button">Theo tương tác</button>
                        <span>Theo tháng:</span>
                        <button class="dropdown-item" type="button">Theo lượt xem</button>
                        <button class="dropdown-item" type="button">Theo tương tác</button>
                        <span>Theo năm:</span>
                        <button class="dropdown-item" type="button">Theo lượt xem</button>
                        <button class="dropdown-item" type="button">Theo tương tác</button>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-6 cmb">
                        <div class="hero-item">
                            <div class="hero">
                                <div class="cover">
                                    <a href="{{ route('ifht') }}">
                                        <img class="imgg" src="images/avt-truyen/HuyetThan-chu.png"
                                            alt="HuyetThan">
                                    </a>
                                </div>
                                <div class="hero-content">
                                    <a class="title" href="{{ route('ifht') }}" aria-label="Read HuyetThan">
                                        <p>Huyết thần</p>
                                    </a>
                                    <p class="description">Tác giả: Nguyễn Quang Vinh</p>
                                    <div class="tags-list">
                                        <a class="tag-item" href="#"
                                            style="background-color: rgb(238, 238, 238); color: rgb(111, 111, 111);">Truyện
                                            chữ</a>
                                        <a class="tag-item" href="#"
                                            style="background-color: rgb(238, 238, 238); color: rgb(111, 111, 111);">Bi
                                            kịch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-6 cmb">
                        <div class="hero-item">
                            <div class="hero">
                                <div class="cover">
                                    <a href="#">
                                        <img src="images/avt-truyen/dldl.png">
                                    </a>
                                </div>
                                <div class="hero-content">
                                    <a class="title" href="{{ route('ifdl') }}">
                                        <p>Đấu la đại lục 3</p>
                                    </a>
                                    <p class="description">Tác giả: Đường Gia Tam Thiếu<br></p>
                                    <div class="tags-list">
                                        <a class="tag-item" href="#"
                                            style="background-color: rgb(238, 238, 238); color: rgb(111, 111, 111);">Phiêu
                                            lưu</a>
                                        <a class="tag-item" href="#"
                                            style="background-color: rgb(238, 238, 238); color: rgb(111, 111, 111);">Viễn
                                            tưởng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-6 cmb">
                        <div class="hero-item">
                            <div class="hero">
                                <div class="cover">
                                    <a href="#">
                                        <img src="images/avt-truyen/chi4.jpg" alt="HuyetThan">
                                    </a>
                                </div>
                                <div class="hero-content">
                                    <a class="title" href="#" aria-label="Read HuyetThan">
                                        <p>Chị 4 quyền lực</p>
                                    </a>
                                    <p class="description">Tác giả: Shimesaba<br></p>
                                    <div class="tags-list">
                                        <a class="tag-item" href="#"
                                            style="background-color: rgb(238, 238, 238); color: rgb(111, 111, 111);">Tình
                                            cảm</a>
                                        <a class="tag-item" href="#"
                                            style="background-color: rgb(238, 238, 238); color: rgb(111, 111, 111);">Quần
                                            đội</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-6 cmb">
                        <div class="hero-item">
                            <div class="hero">
                                <div class="cover">
                                    <a href="#">
                                        <img src="images/avt-truyen/images.jpg" alt="HuyetThan">
                                    </a>
                                </div>
                                <div class="hero-content">
                                    <a class="title" href="#" aria-label="Read HuyetThan">
                                        <p>Doraemon - Stand by me</p>
                                    </a>
                                    <p class="description">Tác giả: Fujiko Fujio<br></p>
                                    <div class="tags-list">
                                        <a class="tag-item" href="#"
                                            style="background-color: rgb(238, 238, 238); color: rgb(111, 111, 111);">Trùng
                                            sinh</a>
                                        <a class="tag-item" href="#"
                                            style="background-color: rgb(238, 238, 238); color: rgb(111, 111, 111);">Lịch
                                            sử</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-6 cmb">
                        <div class="hero-item">
                            <div class="hero">
                                <div class="cover">
                                    <a href="#">
                                        <img src="images/avt-truyen/khongnho.png" alt="HuyetThan">
                                    </a>
                                </div>
                                <div class="hero-content">
                                    <a class="title" href="#" aria-label="Read HuyetThan">
                                        <p>Không nhớ</p>
                                    </a>
                                    <p class="description">Tác giả: Bất thoát<br></p>
                                    <div class="tags-list">
                                        <a class="tag-item" href="#"
                                            style="background-color: rgb(238, 238, 238); color: rgb(111, 111, 111);">Samurai</a>
                                        <a class="tag-item" href="#"
                                            style="background-color: rgb(238, 238, 238); color: rgb(111, 111, 111);">Trò
                                            chơi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-6 cmb">
                        <div class="hero-item">
                            <div class="hero">
                                <div class="cover">
                                    <a href="#">
                                        <img src="images/avt-truyen/nong.png" alt="HuyetThan">
                                    </a>
                                </div>
                                <div class="hero-content">
                                    <a class="title" href="#" aria-label="Read HuyetThan">
                                        <p>Nóng</p>
                                    </a>
                                    <p class="description">Tác giả: Thiên Nha<br></p>
                                    <div class="tags-list">
                                        <a class="tag-item" href="#"
                                            style="background-color: rgb(238, 238, 238); color: rgb(111, 111, 111);">Shoujo</a>
                                        <a class="tag-item" href="#"
                                            style="background-color: rgb(238, 238, 238); color: rgb(111, 111, 111);">Demon</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-6 cmb">
                        <div class="hero-item">
                            <div class="hero">
                                <div class="cover">
                                    <a href="#">
                                        <img src="images/avt-truyen/olongvien.jpg" alt="HuyetThan">
                                    </a>
                                </div>
                                <div class="hero-content">
                                    <a class="title" href="#" aria-label="Read HuyetThan">
                                        <p>Ô long viện</p>
                                    </a>
                                    <p class="description">Tác giả: Au Yao Hsing<br></p>
                                    <div class="tags-list">
                                        <a class="tag-item" href="#"
                                            style="background-color: rgb(238, 238, 238); color: rgb(111, 111, 111);">Bí
                                            ẩn</a>
                                        <a class="tag-item" href="#"
                                            style="background-color: rgb(238, 238, 238); color: rgb(111, 111, 111);">Shounen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-6 cmb">
                        <div class="hero-item">
                            <div class="hero">
                                <div class="cover">
                                    <a href="#">
                                        <img src="images/avt-truyen/ok.jpg" alt="HuyetThan">
                                    </a>
                                </div>
                                <div class="hero-content">
                                    <a class="title" href="#" aria-label="Read HuyetThan">
                                        <p>OK.</p>
                                    </a>
                                    <p class="description">Tác giả: Thằng chủ web<br></p>
                                    <div class="tags-list">
                                        <a class="tag-item" href="#"
                                            style="background-color: rgb(238, 238, 238); color: rgb(111, 111, 111);">Yooo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mx-auto" style="width: 330px;">
                    <nav>
                        <ul class="pagination mx-auto">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">69</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>


        <div class="layout ngang">
            <!-- Top 1 -->
            <div class="top-truyen">
                <h2>Top 10 Truyện hay nhất</h2>
                <ul>
                    <li><span>1</span> <a href="{{ route('ifht') }}">Huyết thần</a></li>
                    <li><span>2</span> <a href="{{ route('ifdl') }}">Đấu la đại lục</a></li>
                    <li><span>3</span> Ô long viện</li>
                    <li><span>4</span> Chị 4 quyền lực</li>
                    <li><span>5</span> Nóng</li>
                    <li><span>6</span> Đấm nhau không?</li>
                    <li><span>7</span> Muôn kiếp nhân chia</li>
                    <li><span>8</span> Đắc nhân mua</li>
                    <li><span>9</span> Ngồi code đỡ buồn</li>
                    <li><span>10</span> OK.</li>
                </ul>
            </div>
            <div class="top-truyen">
                <h2>Top 10 Tác giả nổi bật</h2>
                <ul>
                    <li><span>1</span> Nguyễn Quang Vinh</li>
                    <li><span>2</span> Shimesaba</li>
                    <li><span>3</span> Tam Ka</li>
                    <li><span>4</span> Long Tứ</li>
                    <li><span>5</span> Ngũ linh</li>
                    <li><span>6</span> Lam Lục</li>
                    <li><span>7</span> Thấp Bác</li>
                    <li><span>8</span> An Dora</li>
                    <li><span>9</span> LongKa</li>
                    <li><span>10</span> Kha Sắc</li>
                </ul>
            </div>
        </div>

        <!--  About -->
        <div class="layout">
            <h2>About Us</h2>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente itaque labore esse magni quidem omnis,
            nesciunt odio iusto impedit tempore placeat voluptates, eaque quas quo alias quos reiciendis blanditiis
            culpa.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. A iste magnam qui sint doloremque expedita
            accusantium earum perferendis veritatis enim corporis soluta, id excepturi nostrum eveniet, odio temporibus
            non consequatur?
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus deleniti blanditiis recusandae quos nemo
            aperiam nesciunt labore. Fuga, inventore commodi modi, enim veniam totam laborum culpa reiciendis tempora
            voluptatem iure?
            <p><b>Xin cảm ơn, chúc một ngày tối lành!</b></p>
        </div>
    </div>
    <!-- Footer -->
    <div id="footer">
        <div class="footer-top"></div>
        <div class="footer-left">
            <a href="#">
                <p>Truyện chữ</p>
            </a>
            <a href="#">
                <p>Truyện tranh</p>
            </a>
            <a href="#">
                <p>Ngôn ngữ</p>
            </a>
            <a href="#">
                <p>Tác giả</p>
            </a>
        </div>
        <div class="footer-right">
            <a href="#">
                <p>Điều khoản</p>
            </a>
            <a href="#">
                <p>Trợ giúp</p>
            </a>
            <a href="#">
                <p>Báo Cáo</p>
            </a>
            <a href="#">
                <p class="alkblog">2021 ALK Blog</p>
            </a>
        </div>
    </div>
    <script src="js/main-slider.js"></script>
    <script src="jquery.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/slider.js"></script>
</body>

</html>
