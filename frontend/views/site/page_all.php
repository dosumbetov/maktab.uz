
<?
  use yii\helpers\Url;
  foreach ($menu_title as $menu_title_key) {
  	# code...
  }
  foreach ($allpages as $allpages_key) {
  	# code...
  }

?>
<div class="all-title-box">
	<div class="container">
		sad
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<h2 class="mt-3"><?=$menu_title_key->name?></h2>
			<p><?=$allpages_key->text?></p>
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

