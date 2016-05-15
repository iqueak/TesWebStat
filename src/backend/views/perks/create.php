<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Perks */

$this->title = 'Create Perks';
$this->params['breadcrumbs'][] = ['label' => 'Perks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
