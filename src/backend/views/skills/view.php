<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Skills */

$this->title = $model->player_id;
$this->params['breadcrumbs'][] = ['label' => 'Skills', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skills-view">

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
            'illusion',
            'conjuration',
            'destruction',
            'restoration',
            'alteration',
            'enchanting',
            'smithing',
            'heavy_armor',
            'block',
            'two_handed',
            'one_handed',
            'archery',
            'light_armor',
            'sneak',
            'lock_picking',
            'pickpocket',
            'speech',
            'alchemy',
        ],
    ]) ?>

</div>
