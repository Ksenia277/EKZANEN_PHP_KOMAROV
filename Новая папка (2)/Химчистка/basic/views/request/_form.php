<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Type;

$items = Type::find()->select('name_type')->indexBy('id')->column();

/** @var yii\web\View $this */
/** @var app\models\Request $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->hiddenInput(['value' => Yii::$app->user->getId()])->label(false) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_type')->dropdownlist($items,
    ['prompt' => "Выберите вид услуги"]); ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
