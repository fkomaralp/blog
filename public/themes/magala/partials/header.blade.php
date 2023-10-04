<header class="site-header header-style-one">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Site Navigation
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="navbar navbar-expand-lg navigation-area">
                        <div class="site-logo-block">
                            <a class="navbar-brand site-logo" href="{{route('home')}}">
                                @foreach($settings as $s)
                                    <img style="height: 70px ; height: 70px;" src="{{$s->logo}}" alt="logo">
                                @endforeach
                            </a>
                        </div><!--~./ site-logo-block ~-->
                        <div class="mainmenu-area">
                            <nav class="menu">
                                <ul id="nav">
                                    <li class="dropdown-trigger"><a href="#">Home</a>
                                        <ul class="dropdown-content">
                                            <li class="dropdown-trigger"><a href="#">Magazine</a>
                                                <ul class="dropdown-content">
                                                    <li><a href="index.html">Magazine one</a></li>
                                                    <li><a href="index02.html">Magazine two</a></li>
                                                    <li><a href="index03.html">Magazine Three</a></li>
                                                    <li><a href="index04.html">Magazine four</a></li>
                                                    <li><a href="index05.html">Magazine five</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-trigger"><a href="#">Blog</a>
                                                <ul class="dropdown-content">
                                                    <li><a href="index06.html">Blog one</a></li>
                                                    <li><a href="index07.html">Blog two</a></li>
                                                    <li><a href="index08.html">Blog Three</a></li>
                                                    <li><a href="index09.html">Blog four</a></li>
                                                    <li><a href="index10.html">Blog five</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-trigger"><a href="#">Post Styles</a>
                                        <ul class="dropdown-content">
                                            <li><a href="category-standard.html">Standard Post</a></li>
                                            <li><a href="category-grid.html">Grid Post</a></li>
                                            <li><a href="category-list.html">List Post</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-trigger"><a href="#">Kategoriler</a>
                                        <span class="menu-label new">Yeni</span>
                                        <ul class="dropdown-content">
                                            @foreach($categories as $c)
                                                <li>
                                                    <a href="category-grid.html">{{$c->categori_adi}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="dropdown-trigger"><a href="#">Features</a>
                                        <ul class="dropdown-content">
                                            <li><a href="#">Features</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-trigger"><a href="#">Pages</a>
                                        <span class="menu-label">Hot</span>
                                        <ul class="dropdown-content">
                                            <li><a href="category-standard.html">Post standard</a></li>
                                            <li><a href="category-grid.html">Post Grid Two</a></li>
                                            <li><a href="category-list.html">Post list Three</a></li>
                                            <li><a href="post-details.html">Post details One</a></li>
                                            <li><a href="post-details-two.html">Post details Two</a></li>
                                            <li><a href="post-details-three.html">Post details Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav><!--/.menu-->

                            <div class="header-navigation-right">
                                <div class="search-wrap">
                                    <div class="search-btn">
                                        <img src="/themes/magala/assets/images/icon/search.png" alt="icon">
                                        <span>Ara & Bul...</span>
                                    </div>
                                    <div class="search-form">
                                        <form action="#">
                                            <input type="search" placeholder="Ara & Bul...">
                                            <button type="submit"><i class='fa fa-search'></i></button>
                                        </form>
                                    </div>
                                </div><!--~./ search-wrap ~-->

{{--                                <ul class="nav-btns">--}}
{{--                                    <li>--}}
{{--                                        <a href="#" id="bt-show-sidebar"><button class="btn btn-sm btn-primary" style="border-radius: 40px; font-size: 14px;">Giriş Yap !</button></a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
                            </div><!--~./ header-navigation-right ~-->
                        </div><!--~./ mainmenu-wrap ~-->
                    </div><!--~./ navigation-area ~-->
                </div>
            </div>
        </div>
    </div><!--~./ site-navigation ~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Mobile Menu
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="mobile-menu">
        <a class="mobile-logo" href="index.html">
            <img src="/themes/magala/assets/images/logo/logo-black.png" alt="logo">
        </a>
    </div><!--~~./ end mobile menu ~~-->
</header>
