<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Portallogin */

$this->title = 'Create Portallogin';
$this->params['breadcrumbs'][] = ['label' => 'Portallogins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portallogin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
