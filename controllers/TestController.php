<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        $id = Yii::$app->user->id;
        if (!Yii::$app->user->isGuest) {
            $username = Yii::$app->user->identity->username;
            return "Hello, $username ($id)";
        }
        return "Hello, Guest ($id)";
    }
}