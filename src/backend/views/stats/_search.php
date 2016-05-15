<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\StatsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stats-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'player_id') ?>

    <?= $form->field($model, 'health') ?>

    <?= $form->field($model, 'endurance') ?>

    <?= $form->field($model, 'intelligence') ?>

    <?= $form->field($model, 'dexterity') ?>

    <?php // echo $form->field($model, 'charisma') ?>

    <?php // echo $form->field($model, 'morals') ?>

    <?php // echo $form->field($model, 'good_lucky') ?>

    <?php // echo $form->field($model, 'shout') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
