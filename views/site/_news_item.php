<?php
use yii\helpers\BaseUrl;

?>

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="<?php echo BaseUrl::base().'/storage/img/'. $model->image; ?>" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title"><?php echo $model->title ?></h5>
        <p class="card-text"><?php echo $model->content ?></p>
        <a href="<?php echo BaseUrl::base() . '/news/view/?id='. $model->id; ?>" class="btn btn-primary">Go somewhere</a>
    </div>
</div>