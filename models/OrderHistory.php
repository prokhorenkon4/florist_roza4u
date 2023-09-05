<?php


namespace app\models;


use yii\db\ActiveRecord;

class OrderHistory extends ActiveRecord
{

    public static function tableName()
    {
        return 'order_history';
    }

}