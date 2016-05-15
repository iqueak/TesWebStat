<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Stats */

$this->title = $model->player_id;
$this->params['breadcrumbs'][] = ['label' => 'Stats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stats-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->player_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->player_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'player_id',
            'health',
            'endurance',
            'intelligence',
            'dexterity',
            'charisma',
            'morals',
            'good_lucky',
            'shout',
        ],
    ]) ?>

</div>
