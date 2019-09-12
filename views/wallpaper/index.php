<?php
   use yii\helpers\Html;
use yii\helpers\Url;


$this->registerCSS('#big {
    display: block;
    position: relative;
    text-align: center;
    margin: 0 auto;
    max-width: 100%;
}

#wallpaper p {
    color: #777777;
    margin-top: 10px;
    text-shadow: 0 1px 0 #FFFFFF;
}

h1 {
    color: #000000;
    font-family: "Myriad Pro",Helvetica,Arial,sans-serif;
    font-size: 36px;
    font-weight: bold;
    padding: 15px 0;
}

#wallpaper h1 {
    font-size: 24px;
    text-align: center;
}

#biginfo {
    float: left;
    text-align: left;
    padding: 0 20px;
    margin-bottom: 20px;
}
');
   $this->title = $image->title;


       $this->registerMetaTag([
            'name' => 'description',
            'content' => $image->title
        ]);


    ?>

<div class="index">

<div id="wallpaper" class="col-md-12">
    <h1><?=str_replace('Wallpoper Image', '', $image->title)?></h1>
    <div id="big" style="float: none;">


    <?=     Html::img($image->link, ['width'=>1051.2 ,'alt' => $image->title,'title' => $image->title ])


    ?>
<br>
<br>
<a class="btn btn-primary" href="https://www.facebook.com/sharer.php?<?=Yii::$app->request->url?>">
<i class="fa fa-facebook" aria-hidden="true"></i>
</a>
<a class="btn btn-primary" href="https://twitter.com/intent/tweet?url=<?=Yii::$app->request->url?>&text=<?=$image->title?>">
<i class="fa fa-twitter" aria-hidden="true"></i>
</a>

<br>
<p><?=$image->title . ' ( ' . $image->size . ' ) ' . implode(' , ', explode(' ', $image->title)) ?></p>

</div>

<div id="biginfo" style="">
                <h2><?=$image->title ?></h2>
                <p><?=$image->title ?> was added in <?= \Yii::$app->formatter->asDate($image->dateAdd) ?>. <?=$image->view?> users has viewed and downloaded this wallpaper.

             You can download <?=$image->title ?>for free. All you need to do is help us grow by sharing this wallpaper if you like it :) </p>

                    <p>
                    <?=implode(' , ', explode(' ', $image->title))    ?>                </p>
                    <br>

                    <h3>How to Download</h3>
                    <p><strong>Desktop users:</strong> right click on the image and choose "save image as" or "set as desktop background". <strong>iPad/iPhone users:</strong> tap and hold in 2-seconds on the image then choose "save image"</p>


    </div>

     





</div>



<br>
    <br>
 <h2>Related Wallpaper</h2>

<?php
foreach ($relatedPost as $image) {
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