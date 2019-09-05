<?php

use yii\db\Migration;

/**
 * Class m190905_113558_wallpaper
 */
class m190905_113558_wallpaper extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('keyword',[
            'id' => $this->primaryKey(),
            'keyword' => $this->string(50),
        ]);

        $this->createTable('wallpaper',[
            'id' => $this->primaryKey(),
            'title' =>$this->string(255),
            'slug' =>$this->string(255),
            'link' => $this->string(255),
            'dateAdd' => $this->dateTime(),
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190905_113558_wallpaper cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190905_113558_wallpaper cannot be reverted.\n";

        return false;
    }
    */
}
