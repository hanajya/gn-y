<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <ul id="nav"> 
        <li><a href="<?php echo Yii::$app->request->hostInfo?>/index.php?r=frontend/index/index">首页</a></li> 
        <li><a href="http://www.divcss5.com/html/">HTML教程</a></li> 
        <li><a href="http://www.divcss5.com/rumen/">CSS基础</a></li> 
        <li><a href="http://www.divcss5.com/css-tool/">CSS开发工具</a></li> 
        <li><a href="http://www.divcss5.com/css-texiao/">CSS特效</a></li> 
        <li><a href="http://www.divcss5.com/wenji/">CSS问题</a></li> 
    </ul> 
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; NeedPower.e <?= date('Y') ?></p>
        <p class="pull-right">一个人难免崇拜流浪 by HanaLosoua</p>
       <!--  <p class="pull-right"><?= Yii::powered() ?></p> -->
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
