<?php


namespace app\models;



use yii\db\ActiveRecord;

class Order extends ActiveRecord
{
    public static function tableName()
    {
        return 'order';
    }

    public function getOrderProducts()
    {
        return $this->hasMany(OrderProduct::class, ['order_id' => 'id']);
    }

    public function getOrderPhotos()
    {
        return $this->hasMany(OrderPhoto::class, ['order_id' => 'id']);
    }

}