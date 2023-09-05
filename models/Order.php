<?php


namespace app\models;


use yii\base\Model;

class Order extends Model
{
    public function getAll(){
        return Order::find()->all();
    }


}