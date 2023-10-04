<footer class="site-footer footer-default-style bg-black pt-80">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Footer Widget Area
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="footer-widget-area pb-20">
        <div class="container">
            <div class="row">
                <!--~~~~~ Start Widget About us Info ~~~~~-->
                <div class="col-lg-4">
                    @foreach($settings as $s)
                    <aside class="widget bt-about-us-widget">
                        <div class="widget-content">
                            <div class="about-logo">
                                <a href="index.html"><img src="/themes/magala/assets/images/logo/footer-logo.png" alt="Logo"></a>
                            </div>
                            <p>{{$s->altbilgi}}</p>
                            <ul class="social-share">
                                <li><a class="facebook" href="https://{{$s->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="google-plus" href="https://{{$s->instagram}}"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="twitter" href="https://{{$s->twitter}}"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </aside>
                    @endforeach
                </div><!--~./ end about us widget ~-->

                <!--~~~~~ Start Latest Posts Widget~~~~~-->
                <div class="col-lg-4">
                    <aside class="widget latest-posts-widget">
                        <div class="widget-content">
                            @foreach($posts->take(3) as $p)
                            <article class="post side-post">
                                <div class="thumb-wrap">
                                    <a href="#">
                                        <img src="{{$p->image}}" alt="post">
                                    </a>
                                </div><!--./ thumb-wrap -->
                                <div class="content-entry-wrap">
                                    <h3 class="entry-title">
                                        <a href="#">{{$p->post_adi}}</a>
                                    </h3><!--./ entry-title -->
                                    <div class="entry-meta-content">
                                        <div class="entry-date">
                                            <span>{{$p->created_at}} </span>
                                        </div><!--./ entry-date -->
                                        <div class="entry-category">
                                            <a class="cat" href="#">{{$p->category}}</a>
                                        </div><!--./ entry-category -->
                                    </div><!--./ entry-meta-content -->
                                </div>
                            </article><!--./ end post -->
                            @endforeach
                        </div>
                    </aside>
                </div><!--~./ end latest posts widget ~-->

                <!--~~~~~ Start Widget categories ~~~~~-->
                <div class="col-lg-4">
                    <div class="widget widget-categories">
                        <div class="widget-content">
                            <ul>
                                @foreach($categories->take(5) as $c)
                                    @if($c->status == 1)
                                <li class="cat-item">
                                    <a href="#">{{$c->categori_adi}}<span class="count">52</span></a>
                                </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div><!--~./ end widget address ~-->
            </div>
        </div>
    </div>
    <!--~./ end footer widgets area ~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Footer Bottom Area
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                @foreach($settings as $s)
                <div class="col-lg-6 col-md-6">
                    <div class="copyright-text">
                        <p>© Copyright {{$s->copyright}}</p>
                    </div>
                </div><!--~./ end copyright ~-->
                <div class="col-lg-6 col-md-6">
                    <div class="footer-menu">
                        <ul class="list">
                            <li><a href="https://prestaturk.com">PrestaTürk E-Ticaret & Özel Yazılım Sistemleri</a></li>
                        </ul>
                    </div><!--~./ end footer menu ~-->
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--~./ end footer bottom area ~-->
</footer>
