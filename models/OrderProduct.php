<?php


namespace app\models;



use yii\db\ActiveRecord;

class OrderProduct extends ActiveRecord
{
    public static function tableName()
    {
        return 'order_product';
    }
}