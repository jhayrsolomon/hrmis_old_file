<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\AccountingDisbursementVoucher */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Accounting Disbursement Vouchers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="accounting-disbursement-voucher-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'created_by',
            'routed_by',
            'mode_of_payment_id',
            'funding_source_id',
            'dv_number',
            'payee',
            'particulars',
            'amount',
            'status_id',
            'created_date',
            'date_created',
            'date_updated',
            'date_deleted',
        ],
    ]) ?>

</div>