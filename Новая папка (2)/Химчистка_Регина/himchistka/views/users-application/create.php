<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UsersApplication $model */

$this->title = 'Create Users Application';
$this->params['breadcrumbs'][] = ['label' => 'Users Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-application-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
