<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TypeService $model */

$this->title = 'Update Type Service: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Type Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-service-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
