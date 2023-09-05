<?php


namespace app\models;


use yii\db\ActiveRecord;

class OrderPhoto extends ActiveRecord
{
    public static function tableName()
    {
        return 'order_photo';
    }
}