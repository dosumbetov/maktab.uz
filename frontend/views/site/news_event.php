
<?
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;

	foreach ($news as $news_key) {
		# code...
	}
	foreach ($menu_title as $menu_title_key) {
		# code...
	}
	  $this->title = "Yangilik va E'lonlar";
?>
<div class="all-title-box">
	<div class="container text-center">
		 <?
            echo Breadcrumbs::widget([
                'links' => [
                    $this->title = "Yangilik va E'lonlar",
                ],
            ]); 
          ?>
			<h1>Yangilik va E'lonlar</h1>
		</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<h2 class="mt-3"><?=$news_key->name?></h2>
			<span class="rasm">
				<img src="<?=$news_key->img?>">
			</span>
			<p><?=$news_key->content?></p>
		</div>
		<div class="col-md-3 right_bar">
				<h2 class="text-center mt-3" style="color: #5a54ab">So'ngi yangiliklar</h2>
				<?
					foreach ($news_right as $news_right_key) {
						?>
							<a href="<?=Url::to(['site/news_event', 'id'=>$news_right_key->id])?>"><?=$news_right_key->name?></a>
							<hr>
						<?
					}
				?>
		</div>
	</div>
</div>
<style type="text/css">
	.right_bar {
		background-color: #d1e2ed;
		min-height: 200px;
	}
	.rasm img {
        max-width: 100%;
            object-fit: cover;
        background-position: center;
        height: auto;
        border-radius: 20px;
	}
</style>

      
 <style type="text/css">
  .breadcrumb {
    background-color: rgba(0, 0, 0, 0.5) !important;
  }
  .breadcrumb .breadcrumb-item a {
    color: white !important;
  }
  .breadcrumb .breadcrumb-item:hover a{
    color: blue !important;
  }
  .breadcrumb-item::before {
      float: left;
      padding-right: 0.5rem;
      color: white;
      content: "/";
  }
  .breadcrumb-item.active {
      color: white;
      opacity: 0.6;
  }
   .heros {
        width: 100%;
        background: url("../../images/jpa.jpg");
        position: relative;
        padding: 120px 0 0 0;
      }
       .heros:after {
        content: "";
        position: absolute;
          /*background-color: #0e14a2;*/
          height: 100vh;
          background-size: cover;
          background-position: center;
          z-index: 10;
        }
  }
  }
  }
 </style>