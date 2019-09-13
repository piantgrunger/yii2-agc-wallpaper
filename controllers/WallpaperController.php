<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Wallpaper;

class WallpaperController extends Controller
{

    public function actionIndex($slug)
    {
        $model = Wallpaper::find()->where(['slug'=>$slug])->one();
        $model->view +=1;
        $model->save(false);
 
        $relatedPost = Wallpaper::find()->where(['keyword'=>$model->keyword])
        ->andWhere(['<>','slug',$model->slug])
        ->orderBy(new \yii\db\Expression('rand()'))
        ->limit(10)->all();
        return $this->render('index', ['image' =>$model ,
                                 'relatedPost' => $relatedPost]);
    }
}
