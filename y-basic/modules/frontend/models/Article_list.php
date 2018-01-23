<?php

	namespace app\modules\frontend\models;
	use yii\db\ActiveRecord;
	use Yii;
	/**
	* 
	*/
	class Article_list extends ActiveRecord
	{
		/*
		* 查询所有文章
		**/
		public static function getAllArticle()
		{
			$model = new Article_list;
			$sql = $model->find()->select('id,article_name,article_content,link,watch_times,createby')->orderBy('create_time desc')->all();
			if(!empty($sql))
				return $sql;
			return [];
		}
	}