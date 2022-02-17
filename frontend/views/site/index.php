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
          <img src="images/maktab.jpg" class="d-block w-100 rasm" alt="...">
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
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h3>Maktab taʼlimini rivojlantirish umumxalq harakatiga aylanishi zarur</h3>
                        <p>Oʻzbekiston Respublikasi Prezidenti Shavkat Mirziyoyev raisligida 23-avgust kuni xalq taʼlimi tizimini rivojlantirish, pedagoglarning malakasi va jamiyatdagi nufuzini oshirish, yosh avlod maʼnaviyatini yuksaltirish masalalariga bagʻishlangan videoselektor yigʻilishi boʻlib oʻtdi.</p>

                        <p>Davlatimiz rahbari prezidentlik faoliyatining dastlabki kunlaridan boshlab yurtimizda innovatsion va kreativ fikrlaydigan, zamonaviy kadrlar tayyorlash, yoshlarni vatanparvarlik ruhida, yuksak maʼnaviyat egalari etib tarbiyalash, shu maqsadda taʼlim tizimini takomillashtirish masalalariga alohida eʼtibor qaratib kelmoqda.</p>

                        <a href="https://66.sammaktab.uz/site/news_event?id=13" class="hover-btn-new orange"><span>Batafsil</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/1-chisi.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/5-rasm.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
                
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h3>O‘zbekiston Respublikasi Prezidenti Shavkat Mirziyoyevning O‘qituvchi va murabbiylar kuniga bag‘ishlangan tantanali marosimdagi nutqi</h3>
                        <p>Darhaqiqat, millionlab farzandlarimiz qalbiga ilm-fan ziyosini singdirib, ularni el-yurtga munosib insonlar etib tarbiyalayotgan zahmatkash va olijanob ustozlarimizga har qancha tahsinlar aytsak, arziydi.</p>

                        <p>Men bugun bildiradigan fikrlarni, avvalo, hurmatli muallim va o‘qituvchilarga, qadrli tarbiyachilarga, barcha jonkuyar ziyolilarimizga yo‘llangan murojaat sifatida qabul qilishingizni istardim.</p>

                        <a href="https://66.sammaktab.uz/site/news_event?id=15" class="hover-btn-new orange"><span>Batafsil</span></a>
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
                    <p class="lead">Samarqand shahar 66-maktabnig yillik ko'rsatkichlari</p>
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
                    <p class="stat_count">508</p>
                    <h3>O'quvchilar</h3>
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
                    <p class="stat_count">39</p>
                    <h3>O'qituvchilar</h3>
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
                    <p class="stat_count">24</p>
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

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/maktab.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Rahbarlar</h3>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="images/direc.jpg" alt="" class="img-fluid" style="border-radius: 50px;">
                                <h4>Tuxtayeva Gulandom Dilmuratovna</h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i>Samarqand shahar 66-maktab direktori</h3>
                                <p class="lead"></p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="images/QWER.jpg" style="border-radius: 50%;" alt="" class="img-fluid">
                                <h4>Akramova Mavjuda Fayziyevna.</h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i>Samarqand shahar 66-maktab ma'naviy marifiy ishlar bo'yicha direktor o'rinbosari</h3>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="images/qwert.jpg" style="border-radius: 50%;" alt="" class="img-fluid ">
                                <h4>Musokulova Saodat Xudoyberdiyevna.</h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i>Samarqand shahar 66-maktab o’quv ishlari bo’yicha direktor o'rinbosari </h3>
                               
                            </div>
                            <!-- end testi-meta -->
                        </div>
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="https://mt.uzfi.uz/" target="_blank"><img src="images/site1.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="https://uzfi.uz/uz" target="_blank"><img src="images/site2.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="https://library.uzfi.uz/" target="_blank"><img src="images/site3.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="https://maktab.uz/" target="_blank"><img src="images/site4.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="https://kitob.uz/" target="_blank"><img src="images/site5.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="https://educare.uzedu.uz/en" target="_blank"><img src="images/site6.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->