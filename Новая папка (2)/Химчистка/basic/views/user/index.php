<?php

use app\models\User;
use app\models\Type;
use app\models\Request;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Заявки';
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать заявку', ['/request/create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'id_user',
                'format' => 'raw',
                'value' => function ($model) {
                    return $model->user->fio;
                },
            ],
            'description',
            [
                'attribute' => 'id_type',
                'format' => 'raw',
                'value' => function ($model) {
                    return $model->type->name_type;
                },
            ],
            'date',
            'price',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function ($model) {
                    if($model['status'] === 1) return 'Заявка в процессе выполнения';
                    if($model['status'] === 2) return 'Заявка выполнена';
                },
            ],
        ],
    ]); ?>


</div>