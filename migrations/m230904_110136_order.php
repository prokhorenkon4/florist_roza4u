<?php

use yii\db\Migration;

/**
 * Class m230904_110136_order
 */
class m230904_110136_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        Order_id
Shop
Florist_id
Photo
Comment_manager
Comment_customer
Date_added
Date_deadline
Rating


 $this->createTable('post', [
     'id' => $this->primaryKey(),
     'shop' => $this->string()->notNull(),
     'comment_manager' => $this->text(),
     'comment_customer ' => $this->text(),
     'date_added' => $this->dateTime(),,
     'date_deadline' => $this->dateTime(),
     'rating' => $this->integer(),
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
        echo "m230904_110136_order cannot be reverted.\n";
        $this->dropTable('order');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230904_110136_order cannot be reverted.\n";

        return false;
    }
    */
}
