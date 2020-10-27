<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PortalloginSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Portallogins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portallogin-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Portallogin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'UserID',
            'UserName',
            'Password',
            'UserTypeID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
