<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PhoneList */
/* @var $userModel app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phone-list-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?//= $form->field($model, 'user_id')->textInput() ?>
    <?= $form->field($userModel, 'name')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
