<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\SkillsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Skills';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skills-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Skills', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'player_id',
            'illusion',
            'conjuration',
            'destruction',
            'restoration',
            // 'alteration',
            // 'enchanting',
            // 'smithing',
            // 'heavy_armor',
            // 'block',
            // 'two_handed',
            // 'one_handed',
            // 'archery',
            // 'light_armor',
            // 'sneak',
            // 'lock_picking',
            // 'pickpocket',
            // 'speech',
            // 'alchemy',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
