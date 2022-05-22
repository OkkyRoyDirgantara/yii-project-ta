<?php

namespace app\controllers;

use app\models\CustomerModel;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Query;
use yii\web\Controller;

class TestController extends Controller
{
    /*
    public function behaviors()
    {
        return [
            [
                'class' => 'yii\filters\PageCache',
                'only' => ['index'],
                'duration' => 10
            ]
        ];
    }
    */

//    public function behaviors()
//    {
//        return [
//            [
//                'class' => 'yii\filters\HttpCache',
//                'only' => ['index'],
//                'lastModified' => function($action, $params){
//            $q = new Query();
//            return $q->from('customer')->max('created_at');
//                }
//            ]
//        ];
//    }

    public function behaviors()
    {
        return [
            [
                'class' => 'yii\filters\HttpCache',
                'only' => ['index'],
                'etagSeed' => function ($action, $params) {
                    $customerModel = CustomerModel::find()->all();
                    return serialize([$customerModel]);
                },
            ],
        ];
    }


    public function actionIndex()
    {
        return "Hello world";
    }

    public function actionTestCache()
    {
        $cache = Yii::$app->cache;

        $data = $cache->get("my_cached_data");

        if ($data === false){
            $data = date("d.m.Y H:i:s");
            $cache->set("my_cached_data", $data, 5);
        }
        var_dump($data);
    }

    public function actionQueryCaching()
    {
        $duration = 10;
        $result = CustomerModel::getDb()->cache(function ($db) {
            return CustomerModel::find()->count();
        }, $duration);
        var_dump($result);
        $user = new CustomerModel();
        $user->name = "cached user name";
        $user->email = "cacheduseremail@gmail.com";
        $user->created_at = date('Y-m-d G:i:s');
        $user->save();
        echo "==========";
        var_dump(CustomerModel::find()->count());
    }

    public function actionFragmentCaching()
    {
        $customer = new CustomerModel();
        $customer->name = "Cached username";
        $customer->email = "cached@gmail.com";
        $customer->save();
        $models = CustomerModel::find()->all();
        return $this->render('../site/fragment-cache', ['models' => $models]);
    }
}