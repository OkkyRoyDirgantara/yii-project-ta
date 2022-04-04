<?php

namespace app\controllers\admin;

use Yii;

class AdminPanelController extends \yii\web\Controller
{
    // path
    public $layout = '../admin/layouts/main';
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['/site/login']);
        }else{
            return $this->render('../site/index');
        }
    }

    public function actionAdminNews()
    {
        return $this->render('admin/news');
    }

}