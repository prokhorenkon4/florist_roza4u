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

        // creates index for column `author_id`
        $this->createIndex(
            'idx-post-author_id',
            'post',
            'author_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-post-author_id',
            'post',
            'author_id',
            'user',
            'id',
            'CASCADE'
        );

        order_id
shop
Product_name

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('order_product');
        echo "m230904_110147_order_product cannot be reverted.\n";

        return false;
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
