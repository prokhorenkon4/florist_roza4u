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

        $this->createTable('post', [
     '      id' => $this->primaryKey(),
            'shop' => $this->string()->notNull(),
            'comment_manager' => $this->text(),
            'comment_customer ' => $this->text(),
            'date_added' => $this->dateTime(),,
            'date_deadline' => $this->dateTime(),
            'rating' => $this->integer(),
            'final' => $this->integer(),
            'florist_id' => $this->integer(),
    ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order');
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
