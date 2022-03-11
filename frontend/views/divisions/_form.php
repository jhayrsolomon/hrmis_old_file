<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\Divisions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="divisions-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'division_name')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label('Division Name') ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <?= $form->field($model, 'division_code')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label('Division Code') ?>
            </div>
        </div>
    </div>
    <!-- ?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'division_name')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'division_code')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'deleted')->textInput() ?>

    ?= $form->field($model, 'created_at')->textInput() ?>

    ?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
