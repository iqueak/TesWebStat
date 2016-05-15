<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Bafs */

$this->title = 'Update Bafs: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Bafs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->player_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bafs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
