<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Stats */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stats-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'player_id')->textInput() ?>

    <?= $form->field($model, 'health')->textInput() ?>

    <?= $form->field($model, 'endurance')->textInput() ?>

    <?= $form->field($model, 'intelligence')->textInput() ?>

    <?= $form->field($model, 'dexterity')->textInput() ?>

    <?= $form->field($model, 'charisma')->textInput() ?>

    <?= $form->field($model, 'morals')->textInput() ?>

    <?= $form->field($model, 'good_lucky')->textInput() ?>

    <?= $form->field($model, 'shout')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
