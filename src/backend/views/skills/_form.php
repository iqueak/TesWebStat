<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Skills */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skills-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'player_id')->textInput() ?>

    <?= $form->field($model, 'illusion')->textInput() ?>

    <?= $form->field($model, 'conjuration')->textInput() ?>

    <?= $form->field($model, 'destruction')->textInput() ?>

    <?= $form->field($model, 'restoration')->textInput() ?>

    <?= $form->field($model, 'alteration')->textInput() ?>

    <?= $form->field($model, 'enchanting')->textInput() ?>

    <?= $form->field($model, 'smithing')->textInput() ?>

    <?= $form->field($model, 'heavy_armor')->textInput() ?>

    <?= $form->field($model, 'block')->textInput() ?>

    <?= $form->field($model, 'two_handed')->textInput() ?>

    <?= $form->field($model, 'one_handed')->textInput() ?>

    <?= $form->field($model, 'archery')->textInput() ?>

    <?= $form->field($model, 'light_armor')->textInput() ?>

    <?= $form->field($model, 'sneak')->textInput() ?>

    <?= $form->field($model, 'lock_picking')->textInput() ?>

    <?= $form->field($model, 'pickpocket')->textInput() ?>

    <?= $form->field($model, 'speech')->textInput() ?>

    <?= $form->field($model, 'alchemy')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
