<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\LaboratoryStaff $model */

$this->title = 'Создать сотрудника лаборатории';
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники лаборатории', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laboratory-staff-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
