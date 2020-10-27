<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Billingaddress */

$this->title = 'Create Billingaddress';
$this->params['breadcrumbs'][] = ['label' => 'Billingaddresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="billingaddress-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
