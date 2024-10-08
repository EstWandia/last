<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GameTransactionLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Game Transaction Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="game-transaction-log-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Game Transaction Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CheckoutRequestID',
            'api_type',
            'json_data:ntext',
            'date',
            'state',
            //'transID',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
