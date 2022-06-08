<?php

/** @var yii\web\View $this */

use yii\helpers\BaseUrl;

$this->title = 'My Yii Application';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- <title>Dashboard - NiceAdmin Bootstrap Template</title> -->
    <meta content="" name="description">
    <meta content="" name="keywords">
</head>

<body>
<main id="main" class="main">
            <!-- Left side columns -->
    <?php foreach ($newsData as $news){ ?>
                    <!-- News & Updates Traffic -->
                    <div class="card col-12">
                        <div class="card-body pb-0">
                            <h5 class="card-title">News &amp; Updates <span>| <?= Yii::$app->formatter->asDate($news->date, 'long') ?> </span></h5>
                            <div class="news">
                                    <div class="post-item clearfix">
                                        <img src="<?= BaseUrl::base()."/storage/img/".$news->image ?>" alt="">
                                        <h4><?= $news->title ?></h4>
                                        <p><?= substr($news->content, 0, 40) ?> <a href='<?= BaseUrl::base()."/site/view?id=".$news->id ?>'>Baca Selengkapnya...</a></p>
                                    </div>
                            </div><!-- End sidebar recent posts-->
                        </div>
                    </div><!-- End News & Updates -->
    <?php } ?>
</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>
</html>