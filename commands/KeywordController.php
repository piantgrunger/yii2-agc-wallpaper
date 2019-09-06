<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */



namespace app\commands;

use yii\console\Controller;

 use Buchin\Bing\Image;
 use app\models\Keyword;
 use app\models\Wallpaper;


class KeywordController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */
    public function actionIndex($keyword = '')
    {
        $Modelkeyword= new Keyword();
        $Modelkeyword->keyword = $keyword;
        $Modelkeyword->save();
        $imageScraper = new Image;
        $images = $imageScraper->scrape($keyword, '', ['image_size' => 'extra_large']);
        foreach($images as $image) {
            $model = new Wallpaper();
            $model->title = 'wallpoper Image '.$image['title'];
            $model->link = $image['mediaurl'];
            $model->keyword = $keyword;
            $model->size = $image['size'];
            
       
            $model->dateAdd = date('Y-m-d H:i:s');
            $model->save();





        }

    }
}
