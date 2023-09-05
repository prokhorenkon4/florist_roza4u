<?php


namespace app\models;



use yii\db\ActiveRecord;

class Order extends ActiveRecord
{
    public function getAll(){
        return Order::find()->all();
    }


}