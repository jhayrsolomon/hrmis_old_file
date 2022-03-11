<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\SalaryGroups */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="salary-groups-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'salary_group_name')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label('Group Name') ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'salary_group_code')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label('Group Code') ?>
            </div>
        </div>
        <!-- <div class="col-md-3">
            <div class="form-floating">
                ?= $form->field($model, 'salary_group_status')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label('Group Status') ?>
            </div>
        </div> -->
    </div>

    <!-- ?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'salary_group_name')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'salary_group_code')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'salary_group_status')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'deleted')->textInput() ?>

    ?= $form->field($model, 'created_at')->textInput() ?>

    ?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
