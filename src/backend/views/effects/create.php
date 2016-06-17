<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Effects */

$this->title = 'Create Effects';
$this->params['breadcrumbs'][] = ['label' => 'Effects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="effects-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
