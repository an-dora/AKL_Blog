<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AKL Blog</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@300&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="/css/wellcome.css">
</head>

<body>
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <section id="banner">
            <div class="navbar">
                @if (Route::has('login'))
                    <div class="loReg hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <div class="pt-4 pb-1 border-t border-gray-200">
                                <div class="flex items-center px-4">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <div class="shrink-0 mr-3">
                                            <img class="h-10 w-10 rounded-full object-cover"
                                                src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" />
                                        </div>
                                    @endif
                                    <div class="dropdown1">
                                        <button class="dropbtn">{{ Auth::user()->name }} <i
                                                class="fa fa-caret-down"></i></button>
                                        <div class="dropdown1-content">
                                            <div class="column">
                                                <div>
                                                    <x-jet-responsive-nav-link href="{{ route('profile.show') }}"
                                                        :active="request()->routeIs('profile.show')">
                                                        {{ __('Profile') }}
                                                    </x-jet-responsive-nav-link>
                                                </div>

                                                <div>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();this.closest('form').submit();">
                                                            {{ __('Log Out') }}
                                                        </x-jet-responsive-nav-link>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Đăng
                                nhập</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Đăng ký</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <div class="search-box">
                    <button class="btn-search"><i class="fa fa-search"></i></i></button>
                    <input type="text" class="input-search" placeholder="Có không giữ mất thì tìm...">
                </div>
            </div>
            <div class="banner-text">
                <h3>WELCOME</h3>
                <h1>ALK BLOG</h1>
                <div class="banner-btn">
                    <a href="{{ route('main') }}"><span></span>Vào Đọc</a>
                </div>
                <p class="support"><a href="#support">Liên hệ</a></p>
            </div>
        </section>


        <div id="sideNav">
            <nav>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">RULES</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </nav>
        </div>
        <div id="menuBtn">
            <img src="images/menu.png" id="menu">
        </div>

        <!--Features-->

        <section id="feature">
            <div class="title-text">
                <a id="noiQui"></a>
                <h1>NỘI QUY</h1>
            </div>
            <div class="feature-box">
                <div class="features">
                    <h1>Lorem</h1>
                    <div class="feature-desc">
                        <div class="feature-icon">
                            <i class="fa fa-bullhorn"></i>
                        </div>
                        <div class="feature-text">
                            <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint error hic cupiditate
                                consequatur odio in, eos, necessitatibus quam, quisquam impedit minima quo laudantium
                                molestias placeat earum architecto libero ipsa.</p>
                        </div>
                    </div>
                    <h1>Lorem</h1>
                    <div class="feature-desc">
                        <div class="feature-icon">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="feature-text">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci quod architecto
                                praesentium, ea vero, itaque ut voluptates ipsam corporis repellat, nulla officia
                                numquam omnis asperiores error sint explicabo voluptatum quasi!</p>
                        </div>
                    </div>
                    <h1>Create It</h1>
                    <div class="feature-desc">
                        <div class="feature-icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="feature-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil delectus eligendi rerum
                                esse porro atque, ut, nemo sapiente odio fugit aliquid saepe cum, adipisci accusamus
                                harum voluptates commodi distinctio est?</p>
                        </div>
                    </div>
                </div>
                <div class="features-img">
                    <img src="images/rules.png">
                </div>
            </div>

        </section>

        <!--footer-->

        <section id="footer">
            <img src="images/site.png" class="footer-img" />
            <div class="title-text">
                <a id="support"></a>
                <h1>Liên hệ</h1>
            </div>
            <div class="footer-row">
                <div class="footer-left">
                    <h1>Khu giờ làm việc:</h1>
                    <p><i class="fa fa-clock-o"></i>Lười làm,</p>
                    <p><i class="fa fa-clock-o"></i>Siêng nghỉ.</p>
                </div>
                <div class="footer-right">
                    <h1>Thông tin liên lạc</h1>
                    <p>Đâu đó ở Việt Nam<i class="fa fa-map-marker"></i></p>
                    <p><a href="#">@sieucapvippro</a><i class="fa fa-paper-plane"></i></p>
                    <p>+0123456789JQK<i class="fa fa-phone"></i></p>
                </div>
            </div>

            <div class="social-links">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-youtube-play"></i></a>
            </div>

        </section>
        </section>

        <script>
            var menuBtn = document.getElementById("menuBtn")
            var sideNav = document.getElementById("sideNav")
            var mmenu = document.getElementById("menu")
            sideNav.style.right = "-250px";
            menuBtn.onclick = function() {
                if (sideNav.style.right == "-250px") {
                    sideNav.style.right = "0";
                    menu.src = "images/close.png";
                } else {
                    sideNav.style.right = "-250px";
                    menu.src = "images/menu.png";
                }
            }

            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>

    </div>
</body>

</html>
