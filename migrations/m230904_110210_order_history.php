<?php

use yii\db\Migration;

/**
 * Class m230904_110210_order_history
 */
class m230904_110210_order_history extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

 $this->createTable('post', [
     'id' => $this->primaryKey(),
     'order_id' => $this->integer()->defaultValue(1),
     'comment' => $this->text(),
 ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('order_history');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230904_110210_order_history cannot be reverted.\n";

        return false;
    }
    */
}
