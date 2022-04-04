<?php

use app\models\NewsModel;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Url;

?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id',
        'title',
        'content:ntext',
        'date',
        'image',
    ],
]); ?>