 <?
    use yii\helpers\Url;
 ?>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/slider-01.jpg" class="d-block w-100 rasm" alt="...">
        </div>
       <?
        foreach ($slider as $slider_key) {
          ?>
             <div class="carousel-item">
                <img src="<?=$slider_key->img?>" class="d-block w-100 rasm" alt="...">
              </div>
          <?
        }
       ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <style type="text/css">
         .rasm {
        /*position: relative;*/
        height: 100vh;
        width: 100vh;
            object-fit: cover;
        background-position: center;
      }
    </style>
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>About</h3>
                    <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
                </div>
            </div><!-- end title -->
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>2018 BEST SmartEDU education school</h4>
                        <h2>Welcome to SmartEDU education school</h2>
                        <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis montes, nascetur ridiculus mus. Sed vitae rutrum neque. </p>

                        <a href="#" class="hover-btn-new orange"><span>Learn More</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/about_02.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/about_03.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
                
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>The standard Lorem Ipsum passage, used since the 1500s</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum.</p>

                        <a href="#" class="hover-btn-new orange"><span>Learn More</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
<style type="text/css">
    .timeline__content p,h2 {
        color: black !important;
    }
</style>
    <section class="section lb page-section">
        <div class="container">
             <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3><span style="color: #eea412">Yillik</span> Ko'rsatkich</h3>
                    <p class="lead">Samarqand shahar 66-maktabnig yillik o'qishga kirish ko'rsatkichlari</p>
                </div>
            </div><!-- end title -->
            <div class="timeline">
                <div class="timeline__wrap">
                    <div class="timeline__items">
                        <?
                            foreach ($history as $history_key) {
                                ?>
                                    <div class="timeline__item">
                                        <div class="timeline__content img-bg-01">
                                            <h2><?=$history_key->year?></h2>
                                            <p><?=$history_key->text?></p>
                                        </div>
                                    </div>
                                <?
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section cl">
        <div class="container">
            <div class="row text-left stat-wrap">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
                    <p class="stat_count">12000</p>
                    <h3>O'quvchilar</h3>
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
                    <p class="stat_count">240</p>
                    <h3>O'qituvchilar</h3>
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
                    <p class="stat_count">55</p>
                    <h3>Bitiruvchilar</h3>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="plan" class="section lb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="message-box">
                        <ul class="nav nav-pills nav-stacked" id="myTabs">
                            <li><a class="active" href="#tab1" data-toggle="pill">Yangiliklar</a></li>
                            <li><a href="#tab2" data-toggle="pill">E'lonlar</a></li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div>

            <hr class="invis">

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="tab1">
                            <div class="row text-center">
                               <?
                                    foreach ($news as $news_key) {
                                        ?>
                                            <div class="col-md-4">
                                                <div class="pricing-table pricing-table-highlighted">
                                                    <div class="card" style="width: 100%;">
                                                      <img class="card-img-top" src="<?=$news_key->img?>" alt="Card image cap">
                                                      <div class="card-body">
                                                        <h5 class="card-title"><?=$news_key->name?></h5>
                                                       <!--  <p class="card-text"><?=$news_key->content?></p> -->
                                                      </div>
                                                    </div>
                                                    <div class="pricing-table-sign-up">
                                                        <a href="<?=Url::to(['site/news_event', 'id'=>$news_key->id])?>" class="hover-btn-new orange"><span>Batafsil</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?
                                    }
                               ?>
                               
                               
                            </div><!-- end row -->
                        </div><!-- end pane -->

                        <div class="tab-pane fade" id="tab2">
                            <div class="row text-center">
                                <?
                                    foreach ($event as $event_key) {
                                        ?>
                                            <div class="col-md-4">
                                                <div class="pricing-table pricing-table-highlighted">
                                                    <div class="card" style="width: 100%;">
                                                      <img class="card-img-top" src="<?=$event_key->img?>" alt="Card image cap">
                                                      <div class="card-body">
                                                        <h5 class="card-title"><?=$event_key->name?></h5>
                                                      <!--   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                                      </div>
                                                    </div>
                                                    <div class="pricing-table-sign-up">
                                                        <a href="<?=Url::to(['site/news_event', 'id'=>$event_key->id])?>" class="hover-btn-new orange"><span>Batafsil</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?
                                    }
                               ?>
                            </div><!-- end row -->
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/parallax_04.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Testimonials</h3>
                <p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="images/testi_01.png" alt="" class="img-fluid">
                                <h4>James Fernando </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="images/testi_02.png" alt="" class="img-fluid">
                                <h4>Jacques Philips </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="images/testi_03.png" alt="" class="img-fluid ">
                                <h4>Venanda Mercy </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="images/testi_01.png" alt="" class="img-fluid">
                                <h4>James Fernando </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="images/testi_02.png" alt="" class="img-fluid">
                                <h4>Jacques Philips </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="images/testi_03.png" alt="" class="img-fluid">
                                <h4>Venanda Mercy </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->