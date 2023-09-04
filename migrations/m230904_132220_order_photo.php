<?php

use yii\db\Migration;

/**
 * Class m230904_132220_order_photo
 */
class m230904_132220_order_photo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(),
            'photo' => $this->string(),

        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order_photo');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230904_132220_order_photo cannot be reverted.\n";

        return false;
    }
    */
}
