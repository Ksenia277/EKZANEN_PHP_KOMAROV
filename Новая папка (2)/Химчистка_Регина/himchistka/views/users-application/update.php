<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UsersApplication $model */

$this->title = 'Update Users Application: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-application-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
