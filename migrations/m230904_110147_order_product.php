<?php

use yii\db\Migration;

/**
 * Class m230904_110147_order_product
 */
class m230904_110147_order_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer()->notNull(),
            'shop' => $this->string(),
            'product_name' => $this->string(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('order_product');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230904_110147_order_product cannot be reverted.\n";

        return false;
    }
    */
}
