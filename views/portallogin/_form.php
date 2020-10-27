<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Portallogin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="portallogin-form ">

    <?php $form = ActiveForm::begin(); ?>

     <div class="mywidth">
        <?= $form->field($model, 'UserName')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'Password')->passwordInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'UserTypeID')->textInput() ?>

     </div>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
