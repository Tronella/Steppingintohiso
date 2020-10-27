<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Billingaddress */

$this->title = 'Update Billingaddress: ' . $model->BillingAddressID;
$this->params['breadcrumbs'][] = ['label' => 'Billingaddresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->BillingAddressID, 'url' => ['view', 'id' => $model->BillingAddressID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="billingaddress-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
