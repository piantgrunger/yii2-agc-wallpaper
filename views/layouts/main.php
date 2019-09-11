<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\widgets\Alert;
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::register($this);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => '/wallpoper.png']);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="wallpoper, simply described as high quality wallpapers database which searchable by keyword " />
<meta name="google-site-verification" content="UfoscVo4c0Lpnh1LTmjRjmsr2Ixy0axvwRGaGDY1MOA" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'wall<span>poper.id</span>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-default',
        ],
    ]);

    echo "<form class='navbar-form navbar-right' role='search' action=".Url::to(['site/search'])." method ='POST'>
    <div class='form-group has-feedback'>
         <input id='searchbox' name='search' type='text' placeholder='&#xF002; Search Wallpaper' style='font-family:Arial, FontAwesome' class='form-control'>
     
     </div>
</form>";

    NavBar::end();
    ?>

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
        <p class="pull-left">&copy; wallpoper.id <?= date('Y') ?></p>

        <p class="pull-right">create from Surabaya,Indonesia with love </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
