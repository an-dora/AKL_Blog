<link rel="stylesheet" href="/css/nav.css">
<div class="navbar1">
        <a style="float: left;    font-size: 2rem;
        display: inline;
        color: white;
        font-family: cursive;
        margin: 4px 0 0 10px;
        padding: 0;
        width: 10px;
        mix-blend-mode: screen;" class="img" href="/">ALKBlog</a>
        {{-- <h2>ALKBlog</h2> --}}
    <div>
        @if (Route::has('login'))
            <div class="loReg">
                @auth
                    <div>
                        <div class="flex items-center">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <div class="shrink-0 mr-3">
                                    <img class="h-10 w-10 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}"
                                        alt="{{ Auth::user()->name }}" />
                                </div>
                            @endif
                            <div class="dropdown1">
                                <button class="dropbtn">{{ Auth::user()->name }} <i class="fa fa-caret-down"></i></button>
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
    </div>

    <div class="dropdown1">
        <button class="dropbtn">Thể loại <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown1-content">
            <div class="row">
                <div class="column">
                    <a href="#">Bí ẩn</a>
                    <a href="#">Võ thuật</a>
                    <a href="#">Shounen</a>
                    <a href="#">Âm nhạc</a>
                    <a href="#">Seinen</a>
                    <a href="#">Tokusatsu</a>
                    <a href="#">Kiếm hiệp</a>
                    <a href="#">Dị giới</a>
                    <a href="#">Demon</a>
                    <a href="#">Hành động</a>
                </div>
                <div class="column">
                    <a href="#">Bi kịch</a>
                    <a href="#">Trò chơi</a>
                    <a href="#">Siêu nhiên</a>
                    <a href="#">Samurai</a>
                    <a href="#">Xuyên không</a>
                    <a href="#">Hài hước</a>
                    <a href="#">Live Action</a>
                    <a href="#">Giả tưởng</a>
                    <a href="#">Thám tử</a>
                    <a href="#">Shoujo</a>
                </div>
                <div class="column">
                    <a href="#">Mecha</a>
                    <a href="#">Phiêu lưu</a>
                    <a href="#">Viễn tưởng</a>
                    <a href="#">Trùng sinh</a>
                    <a href="#">Tình cảm</a>
                    <a href="#">Học đường</a>
                    <a href="#">Lịch sử</a>
                    <a href="#">Kinh dị</a>
                    <a href="#">Quần đội</a>
                    <a href="#">Đời thường</a>
                </div>
            </div>
        </div>
    </div>

    <div class="search-box1">
        <button class="btn-search1"><i class="fa fa-search"></i></i></button>
        <input type="text" class="input-search1" placeholder="Có không giữ mất thì tìm...">
    </div>

</div>
