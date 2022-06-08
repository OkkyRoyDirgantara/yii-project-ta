<?php

use yii\helpers\BaseUrl;

?>
<div class="col-lg-8 px-md-5 py-5">
    <div class="row pt-md-4">
        <h1 class="mb-3"><?= $news->title ?></h1>
        <img src="<?= BaseUrl::base()."/storage/img/".$news->image ?>" alt="<?= $news->title ?>">
        <span><?= Yii::$app->formatter->asDate($news->date, 'long') ?></span>
        <br>
        <p class="mt-2"><?= $news->content ?></p>
    </div>
</div>