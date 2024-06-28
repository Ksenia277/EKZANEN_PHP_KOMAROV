<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Organization $model */

$this->title = 'Добавить организацию или физическое лицо';
?>
<div class="organization-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
