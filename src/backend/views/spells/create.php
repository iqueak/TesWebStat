<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Spells */

$this->title = 'Create Spells';
$this->params['breadcrumbs'][] = ['label' => 'Spells', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spells-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
