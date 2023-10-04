<div class="site-content">
    <div class="single-post-thumbnail-area single-post-two">
        <div class="post-thumb bg-image bg-overlay" style="background-image:url({{$post->image}});"></div>
    </div>

    <!--~~~~~ Start Main Wrapper ~~~~~-->
    <div class="main-wrapper ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <!--~~~~~ Start Site Main ~~~~~-->
                    <main class="site-main">
                        <div class="post single-post single-post-two">
                            <div class="post-header single-post-header">
                                <div class="content-entry-wrap">
                                    <div class="featured-badge-list">
                                        <a class="trending" href="#">
                                            <span class="fab fa-gripfire"></span>
                                        </a>
                                        <a class="featured" href="#">
                                            <span class="fa fa-bolt"></span>
                                        </a>
                                    </div><!--./ featured-badge-list -->
                                    <h3 class="entry-title">
                                        <a href="post-details.html"></a>
                                    </h3><!--./ entry-title -->
                                    <div class="entry-meta-content">
                                        <div class="entry-meta-author">
                                            <div class="entry-author-thumb">
                                                <img class="avatar photo" src="http://via.placeholder.com/40x40" alt="author"><!-- Yayınlayanın Fotoğrafı -->
                                            </div>
                                            <div class="entry-author-name">
                                                <a href="#">{{$post->user_id}}</a>
                                            </div>
                                        </div><!--./ entry-meta-author -->
                                        <div class="entry-date">
                                            <span>{{$post->created_at}}</span>
                                        </div><!--./ entry-date -->
                                        <div class="entry-views">
                                            <span>3 Min Read</span>
                                        </div><!--./ entry-date -->
                                        <div class="entry-category">
                                            <a class="cat" href="#">{{$post->category}}</a>
                                        </div><!--./ entry-category -->
                                        <div class="entry-comment">
                                            <span>
                                                @if($comment->post_id === $post->id && $post->status == 1)
                                                    {{$comment->count()}}
                                                @endif
                                            </span>
                                        </div><!--./ entry-comment -->
                                    </div><!--./ entry-meta-content -->
                                </div><!--./ content-entry-wrap -->
                            </div>
                            <div class="single-post-content">
                                <div class="post-share-area">
                                    <h3>@if($post->read_count <= 500) {{$post->read_count}} @else 500+ @endif<span>Okuma</span></h3>
                                    <div class="share">
                                        @foreach($settings as $s)
                                        <a class="facebook" href="https://{{$s->facebook}}">
                                            <span class="fa fa-facebook"></span>
                                            <span class="text">Facebbok</span>
                                        </a>
                                        <a style="background-color: purple" href="https://{{$s->instagram}}">
                                            <span class="fa fa-instagram"></span>
                                            <span class="text">İnstagram</span>
                                        </a>
                                        <a class="twitter" href="https://{{$s->twitter}}">
                                            <span class="fa fa-twitter"></span>
                                            <span class="text">Twitter</span>
                                        </a>
                                        <a class="google" href="https://{{$s->twitter}}">
                                            <span class="fa fa-google-plus"></span>
                                            <span class="text">Google+</span>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <p>{{$post->post_adi}}</p>
                                    <figure class="thumb text-center">
                                        <img src="{{$post->image}}" alt="Img">
                                        <span><a href="https://prestaturk.com" class="thumbnail-text">PrestaTürk E-Ticaret & Özel Yazılım Sistemleri</a></span>
                                    </figure><!--~./ end image group ~-->
                                    <p>{{Str::words($post->post_icerigi,100,'')}} </p>
                                    <div class="row image-group">
                                        <div class="col-lg-6 col-md-6">
                                            <figure class="thumb">
                                                <img src="http://via.placeholder.com/420x420" alt="Img">
                                            </figure>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <figure class="thumb">
                                                <img src="http://via.placeholder.com/420x420" alt="Img">
                                            </figure>
                                        </div>
                                    </div><!--~./ end image group ~-->

                                    <blockquote>
                                        <img src="/themes/magala/assets/images/icon/quote.png" alt="icon">
                                        <p>One of the funny things about the stock market is that every time one person buys</p>
                                    </blockquote>
                                    <img class="alignleft mb-5" src="http://via.placeholder.com/370x320" alt="Img">
                                    <p>{{Str::words($post->post_icerigi, 100,'')}}</p>
                                    @if($post->video_url !== null)
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=JprU54xX2aM"></iframe>
                                        </div>
                                    @endif

                                    <p>{{Str::words($post->post_icerigi, 500,'')}}</p>
                                </div><!--entry content-->
                                <div class="entry-footer mt-60">
                                    <div class="entry-tag">
                                            @foreach($categories as $category)
                                                @if($post->category === $category->id)
                                                    <a href="#" rel="tag">{{$category->name}}</a>
                                                @endif
                                            @endforeach
{{--                                                {{$post->category}}--}}
                                    </div><!--/.entry-tag-->
                                </div><!--/.entry-footer-->
                            </div>
                        </div>

                        <!--~~~~~ Start post Navigation ~~~~~-->
                        <nav class="post-navigation mb-80">

                            <div class="post-previous bg-image bg-overlay" style="background-image:url(http://via.placeholder.com/430x185);">
                                <a rel="prev" href="">
                                    <span class="label">Önceki Post</span>
                                    <h3>Barr releases Mueller and feels the heat</h3>
                                </a>
                            </div>
                            <div class="post-next active bg-image bg-overlay" style="background-image:url(http://via.placeholder.com/430x185);">
                                <a rel="prev" href="#">
                                    <span class="label">Sonraki Post</span>
                                    <h3>This gun is advertise as the popular gun</h3>
                                </a>
                            </div>
                        </nav><!--~./ end post navigation ~-->

                        <!--~~~~~ Start Author Info ~~~~~-->
                        @if($setting->yorum_sys == 1)
                            @foreach($comments as $comment)
                                @if($post->id == $comment->post_id && $comment->status == 1 )
                                    <div class="author-info mb-80">
                                        <div id="author-img">
                                            <figure class="at-img">
                                                <img src="http://via.placeholder.com/120x120" alt="img">
                                            </figure>
                                        </div><!-- / author-img -->
                                        <div id="author-details">
                                            <h3 class="author-name">{{$comment->name}}</h3>
                                            <div class="authors-bio">
                                                <p>{{$comment->comment_detail}}</p>
                                            </div>
                                        </div><!-- /author-details -->
                                    </div><!--~./ end author info ~-->
                                @endif
                            @endforeach
                        @endif

                        <!--~~~~~ Start Related Category Post ~~~~~-->


                        <!--~~~~~ Start Add Banner ~~~~~-->
                        @if($post->files !== null)
                            <div class="add-banner bg-gray ptb-20">
                                <div class="add-content text-center">
                                    <a title="add" href="{{$post->files}}" download="{{$post->files}}">Dosyayı İndir</a>
                                </div>
                            </div><!--~./ end add banner ~-->
                        @endif


                        <!--~~~~~ Start Related Post ~~~~~-->
                        <div class="related-post pt-80 mb-30">
                            <div class="row">
                                <!--~~~~~ Start Post ~~~~~-->
                                    @foreach($posts as $p)
                                        @if($p->category == 12)
                                            <div class="col-12">
                                            <article class="post hentry post-list">
                                                <div class="entry-thumb">
                                                    <figure class="thumb-wrap">
                                                        <a href="post-details.html">
                                                            <img src="{{$p->image}}" alt="post">
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
                                                            <a href="post-details.html">{{$p->post_adi}}</a>
                                                        </h3><!--./ entry-title -->
                                                    </div><!--./ entry-content -->
                                                    <div class="entry-meta-content">
                                                        <div class="entry-meta-author">
                                                            <div class="entry-author-thumb">
                                                                <img class="avatar photo" src="{{$p->image}}"alt="author">
                                                            </div>
                                                            <div class="entry-author-name">
                                                                <a href="#">{{$p->user_id}}</a>
                                                            </div>
                                                        </div><!--./ entry-meta-author -->
                                                        <div class="entry-date">
                                                            <span>{{$p->created_at}}</span>
                                                        </div><!--./ entry-date -->
                                                        <div class="entry-views">
                                                            <span>3 Min Read</span>
                                                        </div><!--./ entry-date -->
                                                        <div class="entry-category">
                                                            <a class="cat" href="#">{{$p->category}}</a>
                                                        </div><!--./ entry-category -->
                                                    </div><!--./ entry-meta-content -->
                                                    <div class="entry-summary">
                                                        <p>{{$p->post_icerigi}}</p>
                                                    </div>
                                                </div><!--./ content-entry-wrap -->
                                            </article>
                                        </div><!--~./ end post ~-->
                                    @endif
                                    @endforeach
                            </div> <!-- /.row -->
                        </div> <!--~./ end related post ~-->
                        <!--~~~~~ Start Comments Area ~~~~~-->
                        <div class="comments-area" id="comments">
                            <div class="comment-respond" id="respond">
                                <h3 class="comment-reply-title headline"><span>Yorum Yapın</span></h3>

                                <form id='contact_form' method="POST" action="/commnetSave">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <p>
                                                <textarea name='comment_detail' id='message' class="form-controllar" aria-required="true" rows="8" cols="45" placeholder="Yorumunuz"></textarea>
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>
                                                <input type='text' name='name' id='name' class="form-controllar"  aria-required="true" placeholder="İsminiz">
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>
                                                <input type='text' name='email' id='email-comments' class="form-controllar"  aria-required="true" placeholder="Email">
                                            </p>
                                        </div>
                                        <input type='text' name='post_id' value="{{$post->id}}" id='email-comments' class="form-controllar"  aria-required="true" placeholder="post_id" hidden="">
                                        <div class="col-md-12">
                                            <p class="form-submit">
                                                <input type="submit" value="Yorumu Gönder" id="submit" name="submit">
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- #respond -->
                        </div> <!--~./ end comments area ~-->
                    </main>
                    <!--~./ end site main ~-->
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
                                    <a href="#" class="cat-item">
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
                                <h4 class="widget-title"><span>Popular Post</span></h4>
                                <div class="widget-content">
                                    <article class="post side-post">
                                        <div class="thumb-wrap">
                                            <a href="post-details.html">
                                                <img src="http://via.placeholder.com/100x100" alt="post">
                                            </a>
                                            <span class="count">1</span>
                                        </div><!--./ thumb-wrap -->
                                        <div class="content-entry-wrap">
                                            <h3 class="entry-title">
                                                <a href="post-details.html">The rumored iPhone could come in hot pink</a>
                                            </h3><!--./ entry-title -->
                                            <div class="entry-meta-content">
                                                <div class="entry-date">
                                                    <span>July 24, 2019 </span>
                                                </div><!--./ entry-date -->
                                            </div><!--./ entry-meta-content -->
                                        </div>
                                    </article><!--./ end post -->

                                    <article class="post side-post">
                                        <div class="thumb-wrap">
                                            <a href="post-details.html">
                                                <img src="http://via.placeholder.com/100x100" alt="post">
                                            </a>
                                            <span class="count">2</span>
                                        </div><!--./ thumb-wrap -->
                                        <div class="content-entry-wrap">
                                            <h3 class="entry-title">
                                                <a href="post-details.html">This gun is advertise as the most popular gun</a>
                                            </h3><!--./ entry-title -->
                                            <div class="entry-meta-content">
                                                <div class="entry-date">
                                                    <span>July 24, 2019 </span>
                                                </div><!--./ entry-date -->
                                            </div><!--./ entry-meta-content -->
                                        </div>
                                    </article><!--./ end post -->

                                    <article class="post side-post">
                                        <div class="thumb-wrap">
                                            <a href="post-details.html">
                                                <img src="http://via.placeholder.com/100x100" alt="post">
                                            </a>
                                            <span class="count">3</span>
                                        </div><!--./ thumb-wrap -->
                                        <div class="content-entry-wrap">
                                            <h3 class="entry-title">
                                                <a href="post-details.html">How to live with some vegeterian when you eat </a>
                                            </h3><!--./ entry-title -->
                                            <div class="entry-meta-content">
                                                <div class="entry-date">
                                                    <span>July 24, 2019 </span>
                                                </div><!--./ entry-date -->
                                            </div><!--./ entry-meta-content -->
                                        </div>
                                    </article><!--./ end post -->
                                </div>
                            </aside><!--~./ end popular posts widget ~-->

                            <!--~~~~~ Start Subscribe Widget~~~~~-->
                            <aside class="widget tb-subscribe-widget">
                                <div class="widget-content">
                                    <div class="subscribe-box">
                                        <div class="icon">
                                            <img src="/themes/magala/assets/images/icon.png" alt="icon">
                                        </div>
                                        <p>Bültenimize Katılın</p>
                                        <div class="subscribe-form">
                                            <!-- Subscribe form -->
                                            <form class="dv-form" id="mc-form" method="POST" action="/bultenSave">
                                                <div class="form-group">
                                                    <input id="mc-email" name="email" placeholder="Email Address" type="email">
                                                    <button class="btn btn-primary" id="subscribe-btn" type="submit">Katılın</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </aside><!--~./ end subscribe widget ~-->

                            <!--~~~~~ Start Posts Slide Widget~~~~~-->
                            <aside class="widget tb-posts-slide-widget">
                                <div class="widget-content">
                                    <div id="post-widget-carousel" class="owl-carousel carousel-nav-circle">
                                        <!--~~~~~ Start Post ~~~~~-->
                                        @foreach($posts->take(2) as $p)
                                            <article class="post hentry post-grid style-five">
                                            <div class="entry-thumb">
                                                <figure class="thumb-wrap">
                                                    <a href="post-details.html">
                                                        <img src="{{$p->image}}" alt="post">
                                                    </a>
                                                </figure><!--./ thumb-wrap -->
                                            </div><!--./ entry-thumb -->
                                            <div class="content-entry-wrap">
                                                <div class="featured-badge-list">
                                                    <a class="featured" href="#">
                                                        <span class="fa fa-bolt"></span>
                                                    </a>
                                                </div>
                                                <div class="entry-content">
                                                    <h3 class="entry-title">
                                                        <a href="post-details.html">{{$p->post_adi}}</a>
                                                    </h3><!--./ entry-title -->
                                                </div><!--./ entry-content -->
                                                <div class="entry-meta-content">
                                                    <div class="entry-date">
                                                        <span>October 24, 201129</span>
                                                    </div><!--./ entry-date -->
                                                    <div class="entry-category">
                                                        <a class="cat" href="#">Lifestyle</a>
                                                    </div><!--./ entry-category -->
                                                </div><!--./ thumb-wrap -->
                                            </div><!--./ content-entry-wrap -->
                                        </article><!--~./ end post ~-->
                                        @endforeach
                                        <!--~~~~~ Start Post ~~~~~-->
                                    </div>
                                </div>
                            </aside><!--~./ end posts slide widget ~-->

                            <!--~~~~~ Start Review Posts Widget~~~~~-->
{{--                            <aside class="widget tb-review-posts-widget">--}}
{{--                                <h4 class="widget-title"><span>Review Post</span></h4>--}}
{{--                                <div class="widget-content">--}}
{{--                                    <article class="post side-post">--}}
{{--                                        <div class="post-review-rating">--}}
{{--                                            <div class="progress" data-percentage="60">--}}
{{--                                                <div class="progress-left">--}}
{{--                                                    <span class="progress-bar"></span>--}}
{{--                                                </div>--}}
{{--                                                <div class="progress-right">--}}
{{--                                                    <span class="progress-bar"></span>--}}
{{--                                                </div>--}}
{{--                                                <div class="progress-value">6</div>--}}
{{--                                            </div>--}}
{{--                                        </div><!--./ post-review-rating -->--}}
{{--                                        <div class="content-entry-wrap">--}}
{{--                                            <h3 class="entry-title">--}}
{{--                                                <a href="post-details.html">The rumored iPhone could come in hot pink</a>--}}
{{--                                            </h3><!--./ entry-title -->--}}
{{--                                            <div class="entry-meta-content">--}}
{{--                                                <div class="entry-date">--}}
{{--                                                    <span>July 24, 2019 </span>--}}
{{--                                                </div><!--./ entry-date -->--}}
{{--                                            </div><!--./ entry-meta-content -->--}}
{{--                                        </div>--}}
{{--                                    </article><!--./ end post -->--}}

{{--                                    <article class="post side-post">--}}
{{--                                        <div class="post-review-rating">--}}
{{--                                            <div class="progress" data-percentage="50">--}}
{{--                                                <div class="progress-left">--}}
{{--                                                    <span class="progress-bar"></span>--}}
{{--                                                </div>--}}
{{--                                                <div class="progress-right">--}}
{{--                                                    <span class="progress-bar"></span>--}}
{{--                                                </div>--}}
{{--                                                <div class="progress-value">5</div>--}}
{{--                                            </div>--}}
{{--                                        </div><!--./ post-review-rating -->--}}
{{--                                        <div class="content-entry-wrap">--}}
{{--                                            <h3 class="entry-title">--}}
{{--                                                <a href="post-details.html">This gun is advertised as gun in American</a>--}}
{{--                                            </h3><!--./ entry-title -->--}}
{{--                                            <div class="entry-meta-content">--}}
{{--                                                <div class="entry-date">--}}
{{--                                                    <span>July 24, 2019 </span>--}}
{{--                                                </div><!--./ entry-date -->--}}
{{--                                            </div><!--./ entry-meta-content -->--}}
{{--                                        </div>--}}
{{--                                    </article><!--./ end post -->--}}
{{--                                    <article class="post side-post">--}}
{{--                                        <div class="post-review-rating">--}}
{{--                                            <div class="progress" data-percentage="70">--}}
{{--                                                <div class="progress-left">--}}
{{--                                                    <span class="progress-bar"></span>--}}
{{--                                                </div>--}}
{{--                                                <div class="progress-right">--}}
{{--                                                    <span class="progress-bar"></span>--}}
{{--                                                </div>--}}
{{--                                                <div class="progress-value">7</div>--}}
{{--                                            </div>--}}
{{--                                        </div><!--./ post-review-rating -->--}}
{{--                                        <div class="content-entry-wrap">--}}
{{--                                            <h3 class="entry-title">--}}
{{--                                                <a href="post-details.html">How to live with some news vegeterian </a>--}}
{{--                                            </h3><!--./ entry-title -->--}}
{{--                                            <div class="entry-meta-content">--}}
{{--                                                <div class="entry-date">--}}
{{--                                                    <span>July 24, 2019 </span>--}}
{{--                                                </div><!--./ entry-date -->--}}
{{--                                            </div><!--./ entry-meta-content -->--}}
{{--                                        </div>--}}
{{--                                    </article><!--./ end post -->--}}
{{--                                    <article class="post side-post">--}}
{{--                                        <div class="post-review-rating">--}}
{{--                                            <div class="progress" data-percentage="90">--}}
{{--                                                <div class="progress-left">--}}
{{--                                                    <span class="progress-bar"></span>--}}
{{--                                                </div>--}}
{{--                                                <div class="progress-right">--}}
{{--                                                    <span class="progress-bar"></span>--}}
{{--                                                </div>--}}
{{--                                                <div class="progress-value">9</div>--}}
{{--                                            </div>--}}
{{--                                        </div><!--./ post-review-rating -->--}}
{{--                                        <div class="content-entry-wrap">--}}
{{--                                            <h3 class="entry-title">--}}
{{--                                                <a href="post-details.html">The rumored iPhone could come in hot pink</a>--}}
{{--                                            </h3><!--./ entry-title -->--}}
{{--                                            <div class="entry-meta-content">--}}
{{--                                                <div class="entry-date">--}}
{{--                                                    <span>July 24, 2019 </span>--}}
{{--                                                </div><!--./ entry-date -->--}}
{{--                                            </div><!--./ entry-meta-content -->--}}
{{--                                        </div>--}}
{{--                                    </article><!--./ end post -->--}}
{{--                                </div>--}}
{{--                            </aside><!--~./ end review posts widget ~-->--}}

                            <!--~~~~~ Start Instafeed Widget ~~~~~-->


                            <!--~~~~~ Start Widget Categories ~~~~~-->
                            <aside class="widget widget-categories">
                                <h4 class="widget-title"><span>Kategoriler</span></h4>
                                <div class="widget-content">
                                    <ul>
                                        @foreach($categories->take(7) as $c)
                                            @if($c->status == 1)
                                                <li class="cat-item">
                                                    <a href="#">{{$c->categori_adi}}<span class="count">14</span></a>
                                                </li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>
                            </aside><!--~./ end widget categories ~-->

                            <!--~~~~~ Start Widget Advertisement ~~~~~-->

                        </div>
                    </div>
                </div><!--~./ end sidebar ~-->
            </div>
        </div>
    </div><!--~./ end main wrapper ~-->
</div>
