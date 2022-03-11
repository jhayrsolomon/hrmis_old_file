<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\models\AccountingDisbursementVoucherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Accounting Disbursement Vouchers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accounting-disbursement-voucher-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Accounting Disbursement Voucher', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'created_by',
            'routed_by',
            'mode_of_payment_id',
            'funding_source_id',
            //'dv_number',
            //'payee',
            //'particulars',
            //'amount',
            //'status_id',
            //'created_date',
            //'date_created',
            //'date_updated',
            //'date_deleted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
