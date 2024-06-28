<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Meeting $model */

$this->title = 'Добавить встречу';
?>
<div class="meeting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
