<?php


namespace app\controllers;




use yii\web\Controller;
use app\models\Order;

class FloristController extends Controller
{

    public function actionIndex()
    {

        $orders = Order::find()
            ->leftJoin('order_product', 'order.id = order_product.order_id')
            ->leftJoin('order_photo', 'order.id = order_photo.order_id')->all();

        return $thus->render('orders', [
            'orders' => $orders,
        ]);
    }


}