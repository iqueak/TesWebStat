<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ItemList */

$this->title = 'Update Item List: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Item Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->item_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="item-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
