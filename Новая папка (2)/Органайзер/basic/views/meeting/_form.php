<?php

use yii\helpers\Html;
use app\models\Organization;
use yii\widgets\ActiveForm;

$items = Organization::find()->select('name')->indexBy('id')->column();

/** @var yii\web\View $this */
/** @var app\models\Meeting $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="meeting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->dropdownlist($items, ['prompt' => 'Выберите организацию/человека']); ?>

    <?= $form->field($model, 'meeting_place')->textInput() ?>

    <?= $form->field($model, 'meeting_time')->input('time') ?>

    <?= $form->field($model, 'meeting_date')->input('date') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
