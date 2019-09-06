<?php

use yii\db\Migration;

/**
 * Class m190906_030812_alter
 */
class m190906_030812_alter extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('wallpaper', 'view', $this->integer()->notNull()->defaultValue(0));
 
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190906_030812_alter cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190906_030812_alter cannot be reverted.\n";

        return false;
    }
    */
}
