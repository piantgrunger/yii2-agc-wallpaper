<?php

namespace app\commands;

use Buchin\GoogleSuggest\GoogleSuggest;
use yii\console\Controller;
use app\models\Keyword;

class SuggestController extends Controller
{
    public function actionIndex()
    {
        $model = Keyword::find()->select("keyword")->distinct()->all();
        foreach ($model as $data) {
            $suggested = GoogleSuggest::grab($data->keyword);
            foreach ($suggested as $keyword) {
                $controller = new KeywordController(\Yii::$app->controller->id, \Yii::$app);
                $controller->actionIndex($keyword);
                print($keyword."\n");
            }
        }
    }
}
