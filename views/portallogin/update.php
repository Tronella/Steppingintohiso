<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Portallogin */

$this->title = 'Update Portallogin: ' . $model->UserID;
$this->params['breadcrumbs'][] = ['label' => 'Portallogins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->UserID, 'url' => ['view', 'id' => $model->UserID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="portallogin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
