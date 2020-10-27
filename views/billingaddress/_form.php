<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Billingaddress */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="billingaddress-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CustomerID')->textInput() ?>

    <?= $form->field($model, 'CardIssuerID')->textInput() ?>

    <?= $form->field($model, 'CardNumber')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
