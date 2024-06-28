<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\TypeService;

/** @var yii\web\View $this */
/** @var app\models\UsersApplication $model */
/** @var yii\widgets\ActiveForm $form */


$items = TypeService::find()->select('title')->indexBy('id')->column();
?>

<div class="users-application-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_service_id')->dropdownlist($items, ['prompt' => 'Выберите тип услуги']); ?>

    <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>


    <?= $form->field($model, 'date_receipt')->input('datetime-local') ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
