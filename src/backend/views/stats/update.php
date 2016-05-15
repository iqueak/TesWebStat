<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Stats */

$this->title = 'Update Stats: ' . $model->player_id;
$this->params['breadcrumbs'][] = ['label' => 'Stats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->player_id, 'url' => ['view', 'id' => $model->player_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stats-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
