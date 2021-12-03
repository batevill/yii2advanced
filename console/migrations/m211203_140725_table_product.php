<?php

use yii\db\Migration;

/**
 * Class m211203_140725_table_product
 */
class m211203_140725_table_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211203_140725_table_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211203_140725_table_product cannot be reverted.\n";

        return false;
    }
    */
}
