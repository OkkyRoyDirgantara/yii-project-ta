<?php

namespace app\controllers;

use app\models\Posts;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PostsController implements the CRUD actions for Posts model.
 */
class PostsController extends ActiveController
{
    public $modelClass = 'app\models\Posts';
}
