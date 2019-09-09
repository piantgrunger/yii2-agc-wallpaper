<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
$this->title ="wallpoper - Free Wallpaper";
$this->registerCSS("#searchInfo {
    color: #666666;
    font-size: 14px;
    line-height: 1.5;
    margin: 25px auto;
    padding: 10px 0;
    text-align: center;
    width: 100%;
}
h1 {
    color: #000000;
    font-family: \"Myriad Pro\",Helvetica,Arial,sans-serif;
    font-size: 36px;
    font-weight: bold;
    padding: 15px 0;
}
"

);

?>
<div class="site-index">
<div id="searchInfo">
<img src="<?=Url::to(['/img/pola2.jpeg'])?>" style="position: relative; top: 0px; width: 250px;">
<h1>We have Million Free Wallpapers</h1>
<p>Looking for free wallpaper for your desktop or mobile device ? We have it! <br> 
  wallpoper.id simply described as high quality wallpapers database which is searchable by keyword.</p>        

<div class="clr"></div>
</div>
<?php
foreach ($images as $image) {
    ?>
<div class="col-md-4" >
    <div class="panel panel-success">
        <div class="panel-heading">

    <?=$image->title?>


        </div>
        <div class="panel-body">
       <?=Html::a(
           Html::img($image->link, ['width'=>280,'Height' =>175 ,'alt' => $image->title ]),
           Url::to(['/wallpaper/'.$image->slug]),
           ['title'=>$image->title]
       ); ?>
       </div>
       </div>
   </div>
    <?php
}

?>
</div>
