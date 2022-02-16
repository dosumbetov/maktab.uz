
<?
  use yii\helpers\Url;
  use yii\bootstrap4\Breadcrumbs;
	foreach ($news as $news_key) {
		# code...
	}
?>
<style type="text/css">
  .head-text {
    background: rgba(204, 204, 204, 0.5);
    margin-bottom: 20px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
  } 
  .head-text h1{
    margin: 30px 0px 30px 20px;
  } 
    .pagination {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
}
.pagination li a, .pagination .disabled {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #007bff;
  background-color: #fff;
  border: 1px solid #dee2e6;
}

.pagination li a:hover {
  color: #0056b3;
  text-decoration: none;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.pagination li a:focus {
  z-index: 2;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.pagination li a:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.pagination li:first-child a {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.pagination li:last-child a {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.pagination li.active a {
  z-index: 1;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.pagination li.disabled a {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #dee2e6;
} 
.card-body a{
  color: black;
}
.card-body a:hover{
  cursor: pointer;
  text-decoration: none;
}
</style>
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
	<div class="row text-center mt-5 mb-5">
       <?
            foreach ($news as $news_key) {
                ?>
                    <div class="col-md-4 mb-5">
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
	<div class="row">
	  <?
	      echo \yii\widgets\LinkPager::Widget([
	          'pagination'=>$pages,
	      ]);
	  ?>
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