<?php

use yii\db\Migration;

/**
 * Class m190906_025817_alter
 */
class m190906_025817_alter extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('wallpaper', 'keyword', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190906_025817_alter cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190906_025817_alter cannot be reverted.\n";

        return false;
    }
    */
}
