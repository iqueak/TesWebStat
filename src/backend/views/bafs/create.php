<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Bafs */

$this->title = 'Create Bafs';
$this->params['breadcrumbs'][] = ['label' => 'Bafs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bafs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
