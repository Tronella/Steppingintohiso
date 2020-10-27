<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CustomersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CustomerID') ?>

    <?= $form->field($model, 'CFirstName') ?>

    <?= $form->field($model, 'CLastName') ?>

    <?= $form->field($model, 'DateOfBirth') ?>

    <?= $form->field($model, 'GenderID') ?>

    <?php // echo $form->field($model, 'CEmail') ?>

    <?php // echo $form->field($model, 'CTelephone') ?>

    <?php // echo $form->field($model, 'UserID') ?>

    <?php // echo $form->field($model, 'CityID') ?>

    <?php // echo $form->field($model, 'StreetAddress') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
