<?php


namespace app\models;



use yii\db\ActiveRecord;

class Order extends ActiveRecord
{
    public function getAll()
    {
        return Order::find()->all();
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