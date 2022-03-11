<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\AccountingDisbursementVoucher */

$this->title = 'Create Accounting Disbursement Voucher';
$this->params['breadcrumbs'][] = ['label' => 'Accounting Disbursement Vouchers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accounting-disbursement-voucher-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
