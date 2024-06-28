<?php

use app\models\LaboratoryStaff;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Сотрудники лабратории';

?>
<div class="laboratory-staff-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать сотрудника лаборатории', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fio',
            'gender',
            'age',
            'marital_status',
            //'having_children',
            //'post',
            //'academic_degree',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, LaboratoryStaff $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
