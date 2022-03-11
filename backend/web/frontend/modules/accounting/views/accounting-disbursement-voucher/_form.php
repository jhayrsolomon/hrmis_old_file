<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\AccountingDisbursementVoucher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accounting-disbursement-voucher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'routed_by')->textInput() ?>

    <?= $form->field($model, 'mode_of_payment_id')->textInput() ?>

    <?= $form->field($model, 'funding_source_id')->textInput() ?>

    <?= $form->field($model, 'dv_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'particulars')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'status_id')->textInput() ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <?= $form->field($model, 'date_updated')->textInput() ?>

    <?= $form->field($model, 'date_deleted')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
