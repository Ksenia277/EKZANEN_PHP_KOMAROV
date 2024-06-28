<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TypeService $model */

$this->title = 'Create Type Service';
$this->params['breadcrumbs'][] = ['label' => 'Type Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-service-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
