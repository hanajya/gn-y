<?php

/*
* 轮播，文章内容
**/
use yii\helpers\Url;
use yii\bootstrap\Carousel;
?>
<style type="text/css">
	.arcontent{
		height: 200px;
		overflow: hidden;
		text-overflow: ellipsis;
	}
</style>
<div class="row">
	<div class="col-md-11" style="padding-left: 100px;">
	<?php 
		echo Carousel::widget([
		    'items' => [
		        ['content' => '<img src="/front_img/slide1.jpg"/>'],
		        ['content' => '<img src="/front_img/slide2.jpg"/>'],
		        ['content' => '<img src="/front_img/slide3.jpg"/>'],
		    ]
		]);
	?>
	</div>
</div>
<hr style="margin-top: 5px;" />
<div class="row">
<?php foreach($models as $model){?>
	<div class="col-xs-6" style="font-size: 16px;">
		<?php echo $model->article_name;?>
		<div class="arcontent" >
			<?php echo $model->article_content;?>
		</div>
		<a href="<?php echo $model->link;?>"><div class="col-xs-2 pull-right" >详情...</div></a>
	</div>
<?php }?>
</div>
<div class="row">
	<!--分页-->
	
</div>
