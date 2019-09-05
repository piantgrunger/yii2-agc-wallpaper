<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

?>
<div class="site-index">
<?php
   foreach ($images as $image) {
       ?>
<div class="col-md-4" >
    <div class="panel panel-success">
        <div class="panel-heading">

       <?=$image->title?>


        </div>
        <div class="panel-body">
       <?= Html::img($image->link, ["width"=>280,"Height" =>175 ,'alt' => $image->title ]); ?>
       </div>
       </div>
   </div>
<?php
   }

?>
</div>