<?php

namespace app\models;

use Yii;

use yii\behaviors\SluggableBehavior;


/**
 * This is the model class for table "wallpaper".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $link
 * @property string $dateAdd
 */
class Wallpaper extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wallpaper';
    }

    /**
     * {@inheritdoc}
     */
 public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'title',
                // 'slugAttribute' => 'slug',
            ],
        ];
    }

    public function rules()
    {
        return [
            [['dateAdd','view','size'], 'safe'],
            [['title', 'slug', 'link','keyword'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'link' => 'Link',
            'dateAdd' => 'Date Add',
        ];
    }
}
