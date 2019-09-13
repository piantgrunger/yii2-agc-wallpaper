<?php

namespace app\commands;
use Buchin\GoogleSuggest\GoogleSuggest;
use yii\console\Controller;
use app\models\Keyword;

class TrendsController extends Controller
{
    
    public function actionIndex()
    {
        $model = Keyword::find()->all();
        foreach($model as $data) {

        $suggested = GoogleSuggest::grab($data->keyword);
        print_r($suggested);
        }

    }
}
