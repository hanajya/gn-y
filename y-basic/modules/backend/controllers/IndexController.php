<?php

namespace app\modules\backend\controllers;
use yii\web\controller;
/**
* indexController 网站首页
* 导航、轮播图、文章标题、文章内容 etc...
*/
class IndexController extends controller
{
	public function actionIndex(){
		//首页
		echo "this is homepage";exit;
		return $this->render("index");
	}
}

