<?php

/** @var \yii\web\View $this */
/** @var string $content */

// use common\widgets\Alert;
use frontend\assets\AppAsset;
// use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use backend\models\Menu;
use yii\helpers\Url;
use backend\models\MenuTitle;
// use yii\bootstrap4\Nav;
// use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- Site CSS -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- ALL VERSION CSS -->
    <!-- <link rel="stylesheet" href="css/versions.css"> -->
    <!-- Responsive CSS -->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="css/custom.css"> -->

    <!-- Modernizer for Portfolio -->
    <!-- <script src="js/modernizer.js"></script> -->


    <!-- Modernizer for Portfolio -->
    <!-- <script src="../../js/modernizer.js"></script> -->
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="">
<?php $this->beginBody() ?>
    <!-- Modal -->


    <!-- LOADER -->
    <div id="preloader">
        <div class="loader-container">
            <div class="progress-br float shadow">
                <div class="progress__item"></div>
            </div>
        </div>
    </div>
    <!-- END LOADER --> 
    
    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <!-- <img src="images/logo.png" alt="" /> -->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-host">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="<?=Url::home()?>">Bosh sahifa</a></li>
                        <?
                        $menu = Menu::find()->all();
                            foreach ($menu as $menu_key) {
                                ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown"><?=$menu_key->name?></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                            
                                            <?
                                            $menu_title = MenuTitle::find()->all();
                                            $menu_title = MenuTitle::find()->Where(['menu_id'=>$menu_key->id])->all();
                                                foreach ($menu_title as $menu_title_key) {
                                                    ?>
                                                        <a class="dropdown-item" href="<?=Url::to(["site/".$menu_title_key->page, 'id'=>$menu_title_key->id])?>"><?=$menu_title_key->name?></a>
                                                    <?
                                                }
                                            ?>
                                        </div>
                                    </li>
                                <?
                            }
                        ?>
                        <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?=Url::to(["site/aloqa"])?>">Aloqa</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->
    
  <?=$content?>

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">Samarqand <a href="#">maktab</a> : sammaktab.uz<a href="/"></a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

  <!-- <script src="js/all.js"></script> -->
    <!-- ALL PLUGINS -->
    <!-- <script src="js/custom.js"></script> -->
    <script src="js/timeline.min.js"></script>
    <script>
        timeline(document.querySelectorAll('.timeline'), {
            forceVerticalMode: 700,
            mode: 'horizontal',
            verticalStartPosition: 'left',
            visibleItems: 4
        });
    </script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
