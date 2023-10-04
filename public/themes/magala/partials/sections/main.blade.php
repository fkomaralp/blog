<section id="main">
    <div class="site-content">
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Frontpage Slider Posts
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="frontpage-slider-posts slider-style-one">
            <div id="frontpage-slider" class="owl-carousel frontpage-slider-one" data-slider-id="1">
                @foreach($posts as $p)
                    @if($p->status == 1)
                <article class="slider-item">
                    <figure class="slider-thumb">
                        <img src="{{$p->image}}" alt="Thmubnail">
                    </figure><!--./ slider-thumb -->
                    <div class="content-entry-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9">
{{--                                    <div class="featured-badge-list">--}}
{{--                                        <a class="trending" href="#">--}}
{{--                                            <span class="fab fa-gripfire"></span>--}}
{{--                                        </a>--}}
{{--                                    </div><!--./ featured-badge-list -->--}}
                                    <div class="entry-content">
                                        <h3 class="entry-title">
                                            <a href="post-details.html">{{$p->post_adi}}</a>
                                        </h3><!--./ entry-title -->
                                    </div><!--./ entry-content -->

                                    <div class="entry-meta-content">
                                        <div class="entry-meta-author">
                                            <div class="entry-author-thumb">
                                                <img class="avatar photo" src="{{$p->image}}" alt="author">
                                            </div>
                                            <div class="entry-author-name">
                                                <a href="#">{{$p->user_id}}</a>
                                            </div>
                                        </div><!--./ entry-meta-author -->
                                        <div class="entry-date">
                                            <span>Yayın Tarihi:  </span>
                                        </div><!--./ entry-date -->
                                        <div class="entry-views">
                                            <span>3 Min Read</span>
                                        </div><!--./ entry-views -->
                                        <div class="entry-category">
                                            <a class="cat" href="#">{{$p->category}}</a>
                                        </div><!--./ entry-category -->
                                    </div>
                                </div>
                            </div>
                        </div><!--./ entry-meta-content -->
                    </div><!--./ content-entry-wrap -->
                </article><!--./ slider-item -->
                    @endif
                @endforeach
            </div>
        </div>
        <div class="top-stories-block top-stories-one bg-gray ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-header">
                            <h2 class="section-title">Trend Postlar</h2>
                        </div>
                    </div><!--./ section-header -->

                    <div class="col-lg-6">
                        <div class="filter-tab-area">
                            <ul class="nav nav-tabs" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#blog_latest" role="tab"><i class="fab fa-gripfire"></i>Popüler (Tıklanma Oranı E fazla 6 Post olacak)</a>
                                </li>
                            </ul>
                        </div><!--~./ end filter tab area ~-->
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="tab-content filter-tab-content">
                            <!--~~~~~ Start Tab Pane ~~~~~-->
                            <div class="tab-pane fade show active" id="blog_latest" role="tabpanel">
                                <div class="row">
                                    <!--~~~~~ Start Post ~~~~~-->
                                    @foreach($posts->take(6) as $p)
                                        @if($p->status == 1)
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-grid">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="{{route('post-detail',['id'=>$p->id])}}">
                                                        <img src="{{$p->image}}" alt="post">
                                                    </a>

                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="{{route('post-detail',['id'=>$p->id])}}">{{Str::words($p->post_icerigi, 8, '...')}}</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-meta-author">
                                                        <div class="entry-author-thumb">
                                                            <img class="avatar photo" src="{{$p->image}}" alt="author">
                                                        </div>
                                                        <div class="entry-author-name">
                                                            <a href="#">{{$p->user_id}}</a>
                                                        </div>
                                                    </div><!--./ entry-meta-author -->
                                                    <div class="entry-date">
                                                        <span>{{$p->created_at}}</span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">{{$p->category}}</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ thumb-wrap -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->
                                        @endif
                                    @endforeach
                                </div>
                            </div><!--~./ end tab pane ~-->

                            <!--~~~~~ Start Tab Pane ~~~~~-->
                            <div class="tab-pane fade" id="blog_trending" role="tabpanel">
                                <div class="row">
                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-grid">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/370x370" alt="post">
                                                    </a>
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">The five biggest fashion looks for next spring</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-meta-author">
                                                        <div class="entry-author-thumb">
                                                            <img class="avatar photo" src="http://via.placeholder.com/40x40" alt="author">
                                                        </div>
                                                        <div class="entry-author-name">
                                                            <a href="#">Kinda Arafa </a>
                                                        </div>
                                                    </div><!--./ entry-meta-author -->
                                                    <div class="entry-date">
                                                        <span>October 24, 2019</span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">Gaming</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-grid">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/370x370" alt="post">
                                                    </a>
                                                    <div class="featured-badge-list">
                                                        <a class="featured" href="#">
                                                            <span class="fa fa-bolt"></span>
                                                        </a>
                                                    </div><!--./ featured-badge-list -->
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">Supreme court girds for fight over census citizenship question</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-meta-author">
                                                        <div class="entry-author-thumb">
                                                            <img class="avatar photo" src="http://via.placeholder.com/40x40" alt="author">
                                                        </div>
                                                        <div class="entry-author-name">
                                                            <a href="#">Ahmed Arafa</a>
                                                        </div>
                                                    </div><!--./ entry-meta-author -->
                                                    <div class="entry-date">
                                                        <span>October 24, 2019</span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">LifeStyle</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-grid">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/370x370" alt="post">
                                                    </a>
                                                    <div class="featured-badge-list">
                                                        <a class="trending" href="#">
                                                            <span class="fab fa-gripfire"></span>
                                                        </a>
                                                    </div><!--./ featured-badge-list -->
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">Cold skateboard an annual booking release in brazil</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-meta-author">
                                                        <div class="entry-author-thumb">
                                                            <img class="avatar photo" src="http://via.placeholder.com/40x40" alt="author">
                                                        </div>
                                                        <div class="entry-author-name">
                                                            <a href="#">Amany Arafa</a>
                                                        </div>
                                                    </div><!--./ entry-meta-author -->
                                                    <div class="entry-date">
                                                        <span>October 24, 2019</span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">Business</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-list post-list-small">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/140x140" alt="post">
                                                    </a>
                                                    <div class="featured-badge-list">
                                                        <a class="featured" href="#">
                                                            <span class="fa fa-bolt"></span>
                                                        </a>
                                                    </div><!--./ featured-badge-list -->
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">The rumored iPhone could come in hot pink, not rose gold and silver</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>July 24, 2019 </span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">LifeStyle</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-list post-list-small">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/140x140" alt="post">
                                                    </a>
                                                    <div class="featured-badge-list">
                                                        <a class="trending" href="#">
                                                            <span class="fab fa-gripfire"></span>
                                                        </a>
                                                    </div><!--./ featured-badge-list -->
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">This gun is advertised as the most popular gun in American crime</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>July 24, 2019 </span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">Fashion</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-list post-list-small">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/140x140" alt="post">
                                                    </a>
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">How to live with some vegeterian when you eat barbecue meat</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>July 24, 2019 </span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">LifeStyle</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-list post-list-small">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/140x140" alt="post">
                                                    </a>
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">How to live with some vegeterian when you eat barbecue meat</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>July 24, 2019 </span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">Business</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-list post-list-small">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/140x140" alt="post">
                                                    </a>
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">The rumored iPhone could come in hot pink, not rose gold and silver</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>July 24, 2019 </span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">LifeStyle</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-list post-list-small">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/140x140" alt="post">
                                                    </a>
                                                    <div class="featured-badge-list">
                                                        <a class="featured" href="#">
                                                            <span class="fa fa-bolt"></span>
                                                        </a>
                                                    </div><!--./ featured-badge-list -->
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">This gun is advertised as the most popular gun in American crime</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>July 24, 2019 </span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">Fashion</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-list post-list-small">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/140x140" alt="post">
                                                    </a>
                                                    <div class="featured-badge-list">
                                                        <a class="trending" href="#">
                                                            <span class="fab fa-gripfire"></span>
                                                        </a>
                                                    </div><!--./ featured-badge-list -->
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">This gun is advertised as the most popular gun in American crime</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>July 24, 2019 </span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">Fashion</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-list post-list-small">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/140x140" alt="post">
                                                    </a>
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">How to live with some vegeterian when you eat barbecue meat</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>July 24, 2019 </span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">LifeStyle</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-list post-list-small">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/140x140" alt="post">
                                                    </a>
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">The rumored iPhone could come in hot pink, not rose gold and silver</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>July 24, 2019 </span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">LifeStyle</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->
                                </div>
                            </div><!--~./ end tab pane ~-->

                            <!--~~~~~ Start Tab Pane ~~~~~-->
                            <div class="tab-pane fade" id="blog_featured" role="tabpanel">
                                <div class="row">
                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-grid">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/370x370" alt="post">
                                                    </a>
                                                    <div class="featured-badge-list">
                                                        <a class="trending" href="#">
                                                            <span class="fab fa-gripfire"></span>
                                                        </a>
                                                    </div><!--./ featured-badge-list -->
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">Cold skateboard an annual booking release in brazil</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-meta-author">
                                                        <div class="entry-author-thumb">
                                                            <img class="avatar photo" src="http://via.placeholder.com/40x40" alt="author">
                                                        </div>
                                                        <div class="entry-author-name">
                                                            <a href="#">Amany Arafa</a>
                                                        </div>
                                                    </div><!--./ entry-meta-author -->
                                                    <div class="entry-date">
                                                        <span>October 24, 2019</span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">Business</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-grid">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/370x370" alt="post">
                                                    </a>
                                                    <div class="featured-badge-list">
                                                        <a class="featured" href="#">
                                                            <span class="fa fa-bolt"></span>
                                                        </a>
                                                    </div><!--./ featured-badge-list -->
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">Supreme court girds for fight over census citizenship question</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-meta-author">
                                                        <div class="entry-author-thumb">
                                                            <img class="avatar photo" src="http://via.placeholder.com/40x40" alt="author">
                                                        </div>
                                                        <div class="entry-author-name">
                                                            <a href="#">Ahmed Arafa</a>
                                                        </div>
                                                    </div><!--./ entry-meta-author -->
                                                    <div class="entry-date">
                                                        <span>October 24, 2019</span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">LifeStyle</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-grid">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/370x370" alt="post">
                                                    </a>
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">The five biggest fashion looks for next spring</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-meta-author">
                                                        <div class="entry-author-thumb">
                                                            <img class="avatar photo" src="http://via.placeholder.com/40x40" alt="author">
                                                        </div>
                                                        <div class="entry-author-name">
                                                            <a href="#">Kinda Arafa </a>
                                                        </div>
                                                    </div><!--./ entry-meta-author -->
                                                    <div class="entry-date">
                                                        <span>October 24, 2019</span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">Gaming</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-list post-list-small">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/140x140" alt="post">
                                                    </a>
                                                    <div class="featured-badge-list">
                                                        <a class="featured" href="#">
                                                            <span class="fa fa-bolt"></span>
                                                        </a>
                                                    </div><!--./ featured-badge-list -->
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">The rumored iPhone could come in hot pink, not rose gold and silver</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>July 24, 2019 </span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">LifeStyle</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-list post-list-small">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/140x140" alt="post">
                                                    </a>
                                                    <div class="featured-badge-list">
                                                        <a class="trending" href="#">
                                                            <span class="fab fa-gripfire"></span>
                                                        </a>
                                                    </div><!--./ featured-badge-list -->
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">This gun is advertised as the most popular gun in American crime</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>July 24, 2019 </span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">Fashion</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-list post-list-small">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/140x140" alt="post">
                                                    </a>
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">How to live with some vegeterian when you eat barbecue meat</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>July 24, 2019 </span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">LifeStyle</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-list post-list-small">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/140x140" alt="post">
                                                    </a>
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">How to live with some vegeterian when you eat barbecue meat</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>July 24, 2019 </span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">Business</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-list post-list-small">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/140x140" alt="post">
                                                    </a>
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">The rumored iPhone could come in hot pink, not rose gold and silver</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>July 24, 2019 </span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">LifeStyle</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-list post-list-small">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/140x140" alt="post">
                                                    </a>
                                                    <div class="featured-badge-list">
                                                        <a class="featured" href="#">
                                                            <span class="fa fa-bolt"></span>
                                                        </a>
                                                    </div><!--./ featured-badge-list -->
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">This gun is advertised as the most popular gun in American crime</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>July 24, 2019 </span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">Fashion</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ entry-meta-content -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-list post-list-small">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/140x140" alt="post">
                                                    </a>
                                                    <div class="featured-badge-list">
                                                        <a class="trending" href="#">
                                                            <span class="fab fa-gripfire"></span>
                                                        </a>
                                                    </div><!--./ featured-badge-list -->
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">This gun is advertised as the most popular gun in American crime</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>July 24, 2019 </span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">Fashion</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ thumb-wrap -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-list post-list-small">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/140x140" alt="post">
                                                    </a>
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">How to live with some vegeterian when you eat barbecue meat</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>July 24, 2019 </span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">LifeStyle</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ thumb-wrap -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->

                                    <!--~~~~~ Start Post ~~~~~-->
                                    <div class="col-lg-4 col-md-6">
                                        <article class="post hentry post-list post-list-small">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="http://via.placeholder.com/140x140" alt="post">
                                                    </a>
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">The rumored iPhone could come in hot pink, not rose gold and silver</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>July 24, 2019 </span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">LifeStyle</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ thumb-wrap -->
                                            </div><!--./ content-entry-wrap -->
                                        </article>
                                    </div><!--~./ end post ~-->
                                </div>
                            </div><!--~./ end tab pane ~-->
                        </div>
                    </div>
                </div>
            </div>
        </div><!--~./ end top stories block ~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Main Wrapper
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="main-wrapper ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <!--~~~~~ Start Site Main ~~~~~-->
                        <main class="site-main">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-header">
                                        <h2 class="section-title">Yayınlar</h2>
                                    </div>
                                </div><!--~./ end section header ~-->

                                <!--~~~~~ Start Post ~~~~~-->
                                <div class="col-12 load-post">
                                    @foreach($posts as $p)
                                        @if($p->status == 1)
                                    <article class="post hentry post-list">
                                        <div class="entry-thumb">
                                            <figure class="thumb-wrap">
                                                <a href="{{route('post-detail',['id'=>$p->id])}}">
                                                    <img src="{{$p->image}}" alt="post">
                                                </a>

                                            </figure><!--./ thumb-wrap -->
                                        </div><!--./ entry-thumb -->
                                        <div class="content-entry-wrap">
                                            <div class="entry-content">
                                                <h3 class="entry-title">
                                                    <a href="{{route('post-detail',['id'=>$p->id])}}">{{$p->post_adi}}</a>
                                                </h3><!--./ entry-title -->
                                            </div><!--./ entry-content -->
                                            <div class="entry-meta-content">
                                                <div class="entry-meta-author">
                                                    <div class="entry-author-thumb">
                                                        <img class="avatar photo" src="{{$p->image}}" alt="author">
                                                    </div>
                                                    <div class="entry-author-name">
                                                        <a href="{{route('post-detail',['id'=>$p->id])}}">{{$p->user_id}}</a>
                                                    </div>
                                                </div><!--./ entry-meta-author -->
                                                <div class="entry-date">
                                                    <span>Yayın Tarihi: {{$p->created_at->format("Y-m-d")}}</span>
                                                </div><!--./ entry-date -->
                                                <div class="entry-category">
                                                    <a class="cat" href="#">{{$p->category}}</a>
                                                </div><!--./ entry-category -->
                                            </div><!--./ entry-meta-content -->
                                            <div class="entry-summary">
                                                <p>{{Str::words($p->post_icerigi, 8, '...')}}</p>
                                            </div>
                                        </div><!--./ content-entry-wrap -->
                                    </article>
                                        @endif
                                    @endforeach
                                </div><!--~./ end post ~-->
                            </div>
                        </main>
                        <!--~./ end site main ~-->

                        <!--~~~~~ Load More Area ~~~~~-->
                        <div class="load-more-area text-center mt-30">
                            <button class="btn btn-load-more loadmore">
                                <i class="fa fa-spinner"></i>
                                Load More
                            </button><!--/#loadmore-->
                            <span class="no-posts">No more posts</span>
                        </div><!--/.load-more-area-->
                    </div>

                    <!--~~~~~ Start sidebar ~~~~~-->
                    <div class="col-lg-3">
                        <div class="sidebar">
                            <div class="sidebar-inner">
                                <!--~~~~~ Start Bt Social Widget~~~~~-->
                                <aside class="widget bt-socail-widget">
                                    <div class="widget-content">
                                        <div class="bt-socail-profile">
                                            <a class="bt-facebook-icon icon" href="#" target="_blank">
                                                <span class="social-icon">
                                                    <i class="fa fa-facebook"></i>
                                                </span>
                                                <span class="bt-count">30.2k</span>
                                                <span class="bt-media-type">Likes</span>
                                            </a>
                                        </div><!--~./ bt-socail-profile ~-->

                                        <div class="bt-socail-profile">
                                            <a class="bt-google-plus-icon icon" href="#" target="_blank">
                                                <span class="social-icon">
                                                    <i class="fa fa-google-plus"></i>
                                                </span>
                                                <span class="bt-count">10.2k</span>
                                                <span class="bt-media-type">Followers</span>
                                            </a>
                                        </div><!--~./ bt-socail-profile ~-->

                                        <div class="bt-socail-profile">
                                            <a class="bt-twitter-icon icon" href="#" target="_blank">
                                                <span class="social-icon">
                                                    <i class="fa fa-twitter"></i>
                                                </span>
                                                <span class="bt-count">62.4k</span>
                                                <span class="bt-media-type">Followers</span>
                                            </a>
                                        </div><!--~./ bt-socail-profile ~-->

                                        <div class="bt-socail-profile">
                                            <a class="bt-youtube-icon icon" href="#" target="_blank">
                                                <span class="social-icon">
                                                    <i class="fa fa-youtube"></i>
                                                </span>
                                                <span class="bt-count">30.2k</span>
                                                <span class="bt-media-type">Subscrib</span>
                                            </a>
                                        </div><!--~./ bt-socail-profile ~-->

                                        <div class="bt-socail-profile">
                                            <a class="bt-instagram-icon icon" href="#" target="_blank">
                                                <span class="social-icon">
                                                    <i class="fa fa-instagram"></i>
                                                </span>
                                                <span class="bt-count">30.2k</span>
                                                <span class="bt-media-type">Likes</span>
                                            </a>
                                        </div><!--~./ bt-socail-profile ~-->

                                        <div class="bt-socail-profile">
                                            <a class="bt-vimeo-icon icon" href="#" target="_blank">
                                                <span class="social-icon">
                                                    <i class="fa fa-vimeo"></i>
                                                </span>
                                                <span class="bt-count">10.4k</span>
                                                <span class="bt-media-type">Followers</span>
                                            </a>
                                        </div><!--~./ bt-socail-profile ~-->

                                        <div class="bt-socail-profile">
                                            <a class="bt-pinterest-icon icon" href="#" target="_blank">
                                                <span class="social-icon">
                                                    <i class="fa fa-pinterest"></i>
                                                </span>
                                                <span class="bt-count">10.2k</span>
                                                <span class="bt-media-type">Followers</span>
                                            </a>
                                        </div><!--~./ bt-socail-profile ~-->

                                        <div class="bt-socail-profile">
                                            <a class="bt-soundcloud-icon icon" href="#" target="_blank">
                                                <span class="social-icon">
                                                    <i class="fa fa-soundcloud"></i>
                                                </span>
                                                <span class="bt-count">5.2k</span>
                                                <span class="bt-media-type">Followers</span>
                                            </a>
                                        </div><!--~./ bt-socail-profile ~-->
                                    </div>
                                </aside><!--~./ end bt social widget ~-->

                                <!--~~~~~ Start Bt Widget Categories~~~~~-->
                                <aside class="widget bt-widget-categories">
                                    <div class="widget-content">
                                        @foreach($categories->take(6) as $c)
                                            @if($c->status == 1)
                                        <a href="{{$c->categori_adi}}" class="cat-item">
                                            <div class="cat-item-inner">
                                                <div class="cat-thumb">
                                                    <img src="http://via.placeholder.com/130x100" alt="img">
                                                </div>
                                                <div class="cat-name">
                                                    <span>{{$c->categori_adi}}</span>
                                                </div>
                                            </div>
                                        </a><!--~./ cat-item ~-->
                                            @endif
                                        @endforeach
                                    </div>
                                </aside><!--~./ end bt widget categories ~-->

                                <!--~~~~~ Start Popular Posts Widget~~~~~-->
                                <aside class="widget popular-posts-widget">
                                    <h4 class="widget-title"><span>Popüler Postlar</span></h4>
                                    <div class="widget-content">
                                        @foreach($posts as $p)
                                            @if($p->status == 1)
                                                <article class="post side-post">
                                                    <div class="thumb-wrap">
                                                        <a href="{{route('post-detail',['id'=>$p->id])}}">
                                                            <img src="{{$p->image}}" alt="post">
                                                        </a>
                                                        <span class="count">{{$p->id}}</span>
                                                    </div><!--./ thumb-wrap -->
                                                    <div class="content-entry-wrap">
                                                        <h3 class="entry-title">
                                                            <a href="{{route('post-detail',['id'=>$p->id])}}">{{Str::words($p->post_icerigi, 8, '...')}}</a>
                                                        </h3><!--./ entry-title -->
                                                        <div class="entry-meta-content">
                                                            <div class="entry-date">
                                                                <span>{{$p->created_at}} </span>
                                                            </div><!--./ entry-date -->
                                                        </div><!--./ entry-meta-content -->
                                                    </div>
                                                </article><!--./ end post -->
                                            @endif
                                        @endforeach
                                    </div>
                                </aside><!--~./ end popular posts widget ~-->

                                <!--~~~~~ Start Subscribe Widget~~~~~-->
                                <aside class="widget tb-subscribe-widget">
                                    <div class="widget-content">
                                        <div class="subscribe-box">
                                            <div class="icon">
                                                <img src="/themes/magala/assets/images/icon.png" alt="icon">
                                            </div>
                                            <p>E-haer Bültenimize Katılın Ve Bizlerden Haberdar Olun!</p>
                                            <div class="subscribe-form">
                                                <!-- Subscribe form -->
                                                <form class="dv-form" id="mc-form">
                                                    <div class="form-group">
                                                        <input id="mc-email" name="email" placeholder="E-mail" type="email">
                                                        <button class="btn btn-primary" name="Subscribe" id="subscribe-btn" type="submit">Katıl</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </aside><!--~./ end subscribe widget ~-->

                                <!--~~~~~ Start Posts Slide Widget~~~~~-->

                            </div>
                        </div>
                    </div><!--~./ end sidebar ~-->
                </div>
            </div>
        </div><!--~./ end main wrapper ~-->
    </div>
</section>
