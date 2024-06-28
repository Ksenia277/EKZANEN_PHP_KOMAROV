<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Books $model */

$this->title = 'Update Books: ' . $model->name;

?>
<div class="books-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
