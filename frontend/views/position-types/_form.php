<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\PositionTypes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="position-types-form">

    <?php $form = ActiveForm::begin(); ?>
        <div class="row">
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'positions_id')->dropDownList($positions, ['prompt'=>'-----Select Position-----', 'class' => 'form-control form-control-sm',])->label('Position'); ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'position_type_name')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label('Type Name') ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'position_type_code')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label('Type Code') ?>
            </div>
        </div>
    </div>
    <!-- ?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'positions_id')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'position_type_name')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'position_type_code')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'deleted')->textInput() ?>

    ?= $form->field($model, 'created_at')->textInput() ?>

    ?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
