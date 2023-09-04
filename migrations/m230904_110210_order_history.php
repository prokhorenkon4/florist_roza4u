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
        Order_history_id
Order_id
Order_status_id
Comment

 $this->createTable('post', [
     'id' => $this->primaryKey(),
     'order_id' => $this->integer()->defaultValue(1),
     'comment' => $this->text(),
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
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('order_history');


        return false;
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
