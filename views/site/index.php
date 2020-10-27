<?php

use app\models\Customers;
use app\models\Staff;
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Stepping Into History';
?>
<div class="site-index">

    <div class="jumbotron">

        <div class="heading">
            <div class="heading-1">
               <h1>Stepping Into History</h1>
            </div>
        </div>

        <p class="lead"> 
          <h1>History in the making</h1>
        </p>

        <p><?= Html::a('Sign Up', ['/portallogin/create'], ['class' => 'btn btn-success']) ?></p>
        <?php // Html::a('Create Customer Account', ['/customers/create'], ['class' => 'btn btn-success']) ?>
        </div>
    </div>

</div>
