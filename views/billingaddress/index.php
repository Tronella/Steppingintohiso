<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BillingaddressSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Billingaddresses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="billingaddress-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Billingaddress', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'BillingAddressID',
            'CustomerID',
            'CardIssuerID',
            'CardNumber',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
