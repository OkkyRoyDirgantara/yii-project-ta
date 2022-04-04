<?php

use app\models\NewsModel;
use yii\bootstrap5\LinkPager;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\ListView;

?>
<div class="site-index">
    <div class="body-content">
        <?php echo ListView::widget([
            'dataProvider' => $dataProvider,
            'layout' => '{summary}<div class="row">{items}</div>{pager}',
            'itemView' => '_news_item',
            'itemOptions' => [
                'class' => 'col-lg-4 col-md-6 mb-4 product-item'
            ],
            'pager' => [
                'class' => LinkPager::class
            ]
        ]) ?>
    </div>
</div>
