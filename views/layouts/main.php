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
      
<meta name="google-site-verification" content="UfoscVo4c0Lpnh1LTmjRjmsr2Ixy0axvwRGaGDY1MOA" />
                  <meta name="msvalidate.01" content="6F7049E0E73367FC1B0F402320D8404B" />
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
  
  <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4309421,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4309421&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
