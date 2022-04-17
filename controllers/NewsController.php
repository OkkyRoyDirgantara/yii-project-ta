<?php
namespace app\controllers;

use app\models\NewsModel;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class NewsController extends Controller
{
    public function actionView($id)
    {
        return $this->render('/news/view', [
            'model' => $this->findModel($id),
            ]);
    }

    protected function findModel($id)
    {
        if (($model = NewsModel::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
