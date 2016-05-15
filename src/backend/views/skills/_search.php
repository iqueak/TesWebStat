<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\SkillsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skills-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'player_id') ?>

    <?= $form->field($model, 'illusion') ?>

    <?= $form->field($model, 'conjuration') ?>

    <?= $form->field($model, 'destruction') ?>

    <?= $form->field($model, 'restoration') ?>

    <?php // echo $form->field($model, 'alteration') ?>

    <?php // echo $form->field($model, 'enchanting') ?>

    <?php // echo $form->field($model, 'smithing') ?>

    <?php // echo $form->field($model, 'heavy_armor') ?>

    <?php // echo $form->field($model, 'block') ?>

    <?php // echo $form->field($model, 'two_handed') ?>

    <?php // echo $form->field($model, 'one_handed') ?>

    <?php // echo $form->field($model, 'archery') ?>

    <?php // echo $form->field($model, 'light_armor') ?>

    <?php // echo $form->field($model, 'sneak') ?>

    <?php // echo $form->field($model, 'lock_picking') ?>

    <?php // echo $form->field($model, 'pickpocket') ?>

    <?php // echo $form->field($model, 'speech') ?>

    <?php // echo $form->field($model, 'alchemy') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
