<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\StatsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stats-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stats', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'player_id',
            'health',
            'endurance',
            'intelligence',
            'dexterity',
            // 'charisma',
            // 'morals',
            // 'good_lucky',
            // 'shout',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
