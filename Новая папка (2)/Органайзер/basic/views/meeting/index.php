<?php

use app\models\Meeting;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Расписание встреч';
?>
<div class="meeting-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'id_user',
                'value' => function ($model) {
                    return $model->organization->name;
                },
            ],
            'meeting_place',
            'meeting_time',
            'meeting_date',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Meeting $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
