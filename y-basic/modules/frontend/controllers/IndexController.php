<?php

namespace app\modules\frontend\controllers;
use yii\web\controller;
use app\modules\frontend\models\Article_list;
/**
* indexController 网站首页
* 导航、轮播图、文章标题、文章内容 etc...
*/
class IndexController extends controller
{
	//public $layout = false;
	public function actionIndex(){
		//首页文章显示
		$models = Article_list::getAllArticle();
		return $this->render("index",['models'=>$models]);
	}
}

