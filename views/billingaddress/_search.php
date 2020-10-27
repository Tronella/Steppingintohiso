<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BillingaddressSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="billingaddress-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'BillingAddressID') ?>

    <?= $form->field($model, 'CustomerID') ?>

    <?= $form->field($model, 'CardIssuerID') ?>

    <?= $form->field($model, 'CardNumber') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
