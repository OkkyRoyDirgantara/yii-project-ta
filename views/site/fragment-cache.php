<?php
use app\models\CustomerModel;
if ($this->beginCache('cachedview')) { ?>
    <?php foreach ($models as $model): ?>
        <?= $model->id; ?>
        <?= $model->name; ?>
        <?= $model->email; ?>
        <br/>
    <?php endforeach; ?>
    <?php $this->endCache(); } ?>
<?php echo "Count:", CustomerModel::find()->count(); ?>