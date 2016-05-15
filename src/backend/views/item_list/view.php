<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ItemList */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Item Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-list-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->item_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->item_id], [
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
            'item_id',
            'name',
            'class',
            'type',
            'weight',
            'cost',
            'mbaff_first',
            'mbaff_second',
            'desc:ntext',
        ],
    ]) ?>

</div>
