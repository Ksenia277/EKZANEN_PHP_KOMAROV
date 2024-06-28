<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\LaboratoryStaff $model */

$this->title = 'Редактирование сторудника лаботатории: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники лаборатории', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="laboratory-staff-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
