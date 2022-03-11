<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\StatusOfAppointments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="status-of-appointments-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'status_of_appointment')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label('Status') ?>
            </div>
        </div>
    </div>

    <!-- ?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'status_of_appointment')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'deleted')->textInput() ?>

    ?= $form->field($model, 'created_at')->textInput() ?>

    ?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
