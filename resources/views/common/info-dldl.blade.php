<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@600&family=Martel&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/info.css">
    <title>ALK Blog</title>
</head>

<body>
    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- Container -->
    <div class="container">
        <h2>Thông tin truyện</h2>
        <div class="head-container">
            <div class="title">
                <img src="images/avt-truyen/dldl.png" alt="HuyetThan">
            </div>
            <div class="thongtin">
                <h1>Đấu la đại lục 3</h1>
                <div id="item">
                    <div class="authur">
                        <img id="img-avatar" src="images/123.png" alt="">
                        <p class="user-name">Đường Gia Tam Thiếu</p>
                        <div class="status-main">
                            <p class="status">Chương: 46</p>
                            <p class="status">Chưa hoàn thành</p>
                            <p class="status">Lượt xem: 10K</p>
                        </div>

                    </div>
                    <div class="preface"><br>
                        <p>Tác giả: Đường Gia Tam Thiếu</p>
                        <p>Edit: ALK Blog</p>
                        <p>-------------</p>
                        <p>Bạn đang theo dõi truyện hay mới Long Vương Truyền Thuyết (Đấu La Đại Lục 3) của tác giả Đường Gia Tam Thiếu rất hấp dẫn và lôi cuốn. Là một truyện được giới thiệu với bạn đọc trên trang đọc truyện chữ online. Đọc truyện bạn đọc sẽ được dẫn dắt vào một thế giới mới lạ, những tình tiết đặc sắc, đọc truyện Tiên Hiệp, Khoa Huyễn, Huyền Huyễn này để trải nghiệm và cảm nhận bạn nhé.</p>
                        <p>Đừng copy mang truyện đi chỗ khác khi không có sự cho phép của tác giả</p>
                        <div class="tag-name">
                            <p>Phiêu lưu</p>
                            <p>Viễn tưởng</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="next">
            <div class="next-btn">
                <a href="{{ route('docdl') }}"><span></span>Bắt đầu đọc</a>
            </div>
        </div>
        <div class="interact">
            <div id="add">
                <button onclick="addFunction()" id="addbutton">
                    <i id="iconplus" class="fa fa-plus" aria-hidden="true"></i>
                    <p id="addbtn">Thêm vào thư viện</p>
                </button>
            </div>
            <div id="voted">
                <button onclick="votedFunction()" id="votedbutton">
                    <i id="iconvoted" class="fa fa-star-o" aria-hidden="true"></i>
                    <p id="votedbtn">Bình chọn</p>
                </button>
            </div>
            <div id="share">
                <div class="sharebtn">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                </div>
            </div>
        </div>
        <section id="box">
            <div class="comment">
                <div class="comment1">
                    <form class="comment-form">
                        <img id="img-avatar" src="images/avatar.png" alt="">
                        <p class="user-name">ALK Blog</p>
                        <textarea id="commentbox" placeholder="Để lại một bình luân"></textarea>
                        <div class="cmtbtn">
                            <input type="submit" onclick="submit()" value="Bình luận">
                            <button id="cancel">Huỷ</button>
                        </div>
                    </form>
                    <div id="list-top">
                        <div id="list">

                        </div>
                    </div>
                </div>

            </div>
            <!--  -->
            <div id="slide-art">
                <div class="title-slider">Có thể bạn sẽ thích</div>
                <div class="slider">
                    <div class="slides">
                        <!--  -->
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
                        <!--  -->
                        <div class="slide first">
                            <a href="#"><img src="images/avt-truyen/thichdamnhauko.png" alt=""></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="images/avt-truyen/daikhaugiapsu.png" alt=""></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="images/avt-truyen/khongnho.png" alt=""></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="images/avt-truyen/olongvien.jpg" alt=""></a>
                        </div>
                        <!--  -->
                        <div class="navigation-auto">
                            <div class="auto-btn"></div>
                            <div class="auto-btn"></div>
                            <div class="auto-btn"></div>
                            <div class="auto-btn"></div>
                        </div>
                        <!--  -->
                    </div>
                    <!--  -->
                </div>
            </div>
        </section>
        <div class="introduce"></div>
    </div>
    @include('layouts.footer');

    <script type="text/javascript" src="/js/js-read.js"></script>
</body>

</html>