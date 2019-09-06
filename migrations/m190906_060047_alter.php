<?php

use yii\db\Migration;

/**
 * Class m190906_060047_alter
 */
class m190906_060047_alter extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('wallpaper', 'size', $this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190906_060047_alter cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190906_060047_alter cannot be reverted.\n";

        return false;
    }
    */
}
