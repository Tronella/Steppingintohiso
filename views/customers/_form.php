<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Customers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CustomerID')->textInput() ?>

    <?= $form->field($model, 'CFirstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DateOfBirth')->textInput() ?>

    <?= $form->field($model, 'GenderID')->textInput() ?>

    <?= $form->field($model, 'CEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CTelephone')->textInput() ?>

    <?= $form->field($model, 'UserID')->textInput() ?>

    <?= $form->field($model, 'CityID')->textInput() ?>

    <?= $form->field($model, 'StreetAddress')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
